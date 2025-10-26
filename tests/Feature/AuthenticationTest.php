<?php

namespace Tests\Feature;

use App\Models\Otp;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_can_be_rendered(): void
    {
        $response = $this->get('/auth/login');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    public function test_send_otp_with_valid_phone(): void
    {
        $response = $this->post('/auth/send-otp', [
            'phone' => '09123456789',
            'terms' => '1',
        ]);

        $response->assertRedirect('/auth/verify');
        $response->assertSessionHas('auth_phone', '9123456789');
        $this->assertDatabaseHas('otps', [
            'phone' => '9123456789',
            'verified' => false,
        ]);
    }

    public function test_send_otp_with_invalid_phone(): void
    {
        $response = $this->post('/auth/send-otp', [
            'phone' => '123',
            'terms' => '1',
        ]);

        $response->assertSessionHasErrors('phone');
    }

    public function test_send_otp_without_terms_acceptance(): void
    {
        $response = $this->post('/auth/send-otp', [
            'phone' => '09123456789',
        ]);

        $response->assertSessionHasErrors('terms');
    }

    public function test_verify_page_requires_session(): void
    {
        $response = $this->get('/auth/verify');

        $response->assertRedirect('/auth/login');
    }

    public function test_verify_page_can_be_rendered_with_session(): void
    {
        $this->withSession(['auth_phone' => '9123456789']);

        $response = $this->get('/auth/verify');

        $response->assertStatus(200);
        $response->assertViewIs('auth.verify');
    }

    public function test_verify_otp_with_valid_code(): void
    {
        $phone = '9123456789';
        $otp = Otp::generate($phone);

        $this->withSession(['auth_phone' => $phone]);

        $response = $this->post('/auth/verify-otp', [
            'otp' => $otp->code,
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'phone' => $phone,
        ]);
        $this->assertDatabaseHas('otps', [
            'phone' => $phone,
            'code' => $otp->code,
            'verified' => true,
        ]);
    }

    public function test_verify_otp_with_invalid_code(): void
    {
        $phone = '9123456789';
        Otp::generate($phone);

        $this->withSession(['auth_phone' => $phone]);

        $response = $this->post('/auth/verify-otp', [
            'otp' => '999999',
        ]);

        $response->assertRedirect();
        $this->assertGuest();
    }

    public function test_verify_otp_with_expired_code(): void
    {
        $phone = '9123456789';
        $otp = Otp::create([
            'phone' => $phone,
            'code' => '123456',
            'expires_at' => now()->subMinutes(5),
            'verified' => false,
        ]);

        $this->withSession(['auth_phone' => $phone]);

        $response = $this->post('/auth/verify-otp', [
            'otp' => $otp->code,
        ]);

        $response->assertRedirect();
        $this->assertGuest();
    }

    public function test_resend_otp(): void
    {
        $phone = '9123456789';
        $this->withSession(['auth_phone' => $phone]);

        $response = $this->post('/auth/resend-otp');

        $response->assertRedirect();
        $this->assertDatabaseHas('otps', [
            'phone' => $phone,
            'verified' => false,
        ]);
    }

    public function test_logout(): void
    {
        $user = User::create([
            'phone' => '9123456789',
            'phone_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->post('/auth/logout');

        $response->assertRedirect('/auth/login');
        $this->assertGuest();
    }

    public function test_existing_user_can_login_again(): void
    {
        $phone = '9123456789';
        $user = User::create([
            'phone' => $phone,
            'phone_verified_at' => now(),
        ]);

        $otp = Otp::generate($phone);
        $this->withSession(['auth_phone' => $phone]);

        $response = $this->post('/auth/verify-otp', [
            'otp' => $otp->code,
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }
}
