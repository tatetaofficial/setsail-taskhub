<?php

namespace App\Services\AccelAI;

class IntentGuard
{
    protected static array $blockedKeywords = [
        'business idea',
        'validate',
        'pricing',
        'market',
        'investment',
        'startup'
    ];

    public static function isBlocked(string $message): bool
    {
        $message = strtolower($message);

        foreach (self::$blockedKeywords as $keyword) {
            if (str_contains($message, $keyword)) {
                return true;
            }
        }

        return false;
    }
}
