<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Auth\Http\Responses\Contracts\RegistrationResponse;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;

class Register extends BaseRegister
{
    public function register(): ?RegistrationResponse
    {
        $data = $this->form->getState();

        $email = $data['email'] ?? null;

        if (! $this->isAllowedEmail($email)) {
            $this->addError('data.email', 'Only allowed domains.');
            return null;
        }

        $existing = User::where('email', $email)->first();
        if ($existing && $existing->google_id) {
            $this->addError('data.email', 'Use Google login.');
            return null;
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $email,
            'password' => $data['password'],
        ]);

        $user->sendEmailVerificationNotification();

        Notification::make()
            ->title('Registration successful')
            ->body('Please check your email to verify your account before logging in.')
            ->success()
            ->duration(3000)
            ->send();

        Filament::auth()->logout();

        return app(RegistrationResponse::class);
    }

    protected function getRedirectUrl(): string
    {
        return '/admin/login';
    }

    private function isAllowedEmail(?string $email): bool
    {
        if (! $email || ! str_contains($email, '@')) {
            return false;
        }

        $allowedDomains = config('auth.allowed_email_domains', []);

        $domain = strtolower(substr(strrchr($email, '@'), 1));

        foreach ($allowedDomains as $allowed) {
            if ($domain === $allowed || str_ends_with($domain, '.' . $allowed)) {
                return true;
            }
        }

        return false;
    }
}
