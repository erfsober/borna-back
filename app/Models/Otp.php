<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'expires_at' => 'datetime',
            'verified' => 'boolean',
        ];
    }

    /**
     * Check if the OTP is expired
     */
    public function isExpired(): bool
    {
        return $this->expires_at->isPast();
    }

    /**
     * Check if the OTP is valid
     */
    public function isValid(): bool
    {
        return ! $this->verified && ! $this->isExpired();
    }

    /**
     * Mark OTP as verified
     */
    public function markAsVerified(): void
    {
        $this->update(['verified' => true]);
    }

    /**
     * Generate a new OTP code for a phone number
     */
    public static function generate(string $phone, int $expiryMinutes = 2): self
    {
        // Invalidate previous OTPs for this phone
        self::where('phone', $phone)
            ->where('verified', false)
            ->update(['verified' => true]);

        // Generate 6-digit code
        $code = 111111;

        return self::create([
            'phone' => $phone,
            'code' => $code,
            'expires_at' => Carbon::now()->addMinutes($expiryMinutes),
            'verified' => false,
        ]);
    }

    /**
     * Verify OTP code for a phone number
     */
    public static function verify(string $phone, string $code): bool
    {
        $otp = self::where('phone', $phone)
            ->where('code', $code)
            ->where('verified', false)
            ->latest()
            ->first();

        if (! $otp || $otp->isExpired()) {
            return false;
        }

        $otp->markAsVerified();

        return true;
    }
}
