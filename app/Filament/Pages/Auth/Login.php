<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Notifications\Notification;

class Login extends BaseLogin
{
    public function mount(): void
    {
        parent::mount();

        if (session()->has('status')) {
            Notification::make()
                ->title('Success')
                ->body(session('status'))
                ->success()
                ->duration(3000)
                ->send();

            session()->forget('status');
        }
    }

    public function authenticate(): ?\Filament\Auth\Http\Responses\Contracts\LoginResponse
    {
        $email = $this->data['email'] ?? null;

        if (! $email) {
            return null;
        }

        $user = User::where('email', $email)->first();

        if (! $this->isAllowedEmail($email)) {
            $this->addError('data.email', 'Only President University or Samasta Nuswantara email accounts are allowed.');
            return null;
        }

        if ($user && $user->google_id && is_null($user->password)) {
            $this->addError('data.email', 'This account was created using Google. Please continue with Google login.');
            return null;
        }

        if ($user && is_null($user->email_verified_at)) {
            $this->addError('data.email', 'Please verify your email address before logging in.');
            return null;
        }

        return parent::authenticate();
    }


    public function updated($property): void
    {
        if ($property === 'data.email') {
            $this->resetErrorBag('data.email');
        }
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
