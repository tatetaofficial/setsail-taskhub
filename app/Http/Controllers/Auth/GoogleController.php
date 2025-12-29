<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Controllers\Controller;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            if (! $this->isAllowedEmail($googleUser->email)) {
                Notification::make()
                    ->title('Login blocked')
                    ->body('Only President University or Samasta Nuswantara email accounts are allowed.')
                    ->danger()
                    ->duration(3000)
                    ->send();

                return redirect()->to('/admin/login');
            }

            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {
                Auth::login($user);
                return redirect()->intended('/admin');
            }

            $existingUser = User::where('email', $googleUser->email)->first();

            if ($existingUser) {
                $existingUser->update([
                    'google_id' => $googleUser->id,
                ]);

                Auth::login($existingUser);
                return redirect()->intended('/admin');
            }

            $newUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => null,
                'email_verified_at' => now(), // Google email trusted
            ]);

            Auth::login($newUser);

            return redirect()->intended('/admin');
        } catch (Exception $e) {
            return redirect('/admin/login')
                ->with('error', 'Something went wrong with Google authentication.');
        }
    }

    /**
     * Allowed email domains (single source of truth)
     */
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
