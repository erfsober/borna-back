<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InteractsWithJalaliTest extends TestCase
{
    use RefreshDatabase;

    public function test_jalali_accessor_returns_jalali_date_for_created_at(): void
    {
        $post = BlogPost::factory()->create([
            'created_at' => '2024-01-15 10:30:00',
        ]);

        $jalaliDate = $post->jalali_created_at;

        $this->assertNotNull($jalaliDate);
        $this->assertIsString($jalaliDate);
    }

    public function test_jalali_accessor_returns_null_for_null_timestamp(): void
    {
        $post = BlogPost::factory()->create([
            'created_at' => '2024-01-15 10:30:00',
        ]);

        $post->deleted_at = null;

        $this->assertNull($post->jalali_deleted_at);
    }

    public function test_jalali_accessor_works_for_updated_at(): void
    {
        $post = BlogPost::factory()->create([
            'updated_at' => '2024-02-20 15:45:00',
        ]);

        $jalaliDate = $post->jalali_updated_at;

        $this->assertNotNull($jalaliDate);
        $this->assertIsString($jalaliDate);
    }
}
