<?php

namespace App\Providers\Filament;

use Filament\Pages\Dashboard;
use App\Filament\Pages\Auth\Login;
use App\Filament\Pages\Auth\Register;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Models\Setting;
use App\Http\Middleware\FilamentUserSettings;
use Filament\View\PanelsRenderHook;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $panel = $panel

            ->spa()
            ->databaseTransactions()
            ->default()
            ->brandName(config('app.name'))
            ->brandLogo(asset('image/setsail-logo.png'))
            ->brandLogoHeight('5rem')
            ->id('admin')
            ->path('admin')
            ->login(Login::class)
            ->registration(Register::class)
            ->colors([
                'primary' => Color::Blue,
            ])

            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn() => view('filament.components.auth-bg')->render()
            )
            ->renderHook(
                PanelsRenderHook::AUTH_LOGIN_FORM_AFTER,
                fn() => view('filament.components.google-login-button')->render()
            )

            ->renderHook(
                PanelsRenderHook::AUTH_REGISTER_FORM_AFTER,
                fn() => view('filament.components.google-login-button')->render()
            )

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                FilamentUserSettings::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->passwordReset()
            ->emailVerification()
            ->profile()
            ->viteTheme('resources/css/filament/admin/theme.css');

        return $panel;
    }
}
