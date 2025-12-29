<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ExternalLogin;
use App\Livewire\ExternalDashboard;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

Route::name('landing.')->group(function () {

    Route::get('/', fn() => view('landing.pages.home.home'))
        ->name('home');

    Route::get('/programs', fn() => view('landing.pages.programs.programs'))
        ->name('programs');

    Route::get('/startup-teams', fn() => view('landing.pages.project.startup'))
        ->name('startup-teams');

    Route::get('/family-business', fn() => view('landing.pages.stream.business'))
        ->name('family-business');

    Route::get('/news', fn() => view('landing.pages.blog.list'))
        ->name('news.list');

    Route::get(
        '/news/{slug}',
        fn($slug) =>
        view('landing.pages.blog.details', compact('slug'))
    )->name('news.show');
});


Route::get('/email/verify/{id}/{hash}', function (Request $request, $id, $hash) {

    $user = User::findOrFail($id);

    if (! hash_equals(
        sha1($user->getEmailForVerification()),
        $hash
    )) {
        abort(403, 'Invalid verification link.');
    }

    if (! $user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
    }

    session()->forget('url.intended');

    return redirect('/admin/login')
        ->with('status', 'Email verified successfully. You may now login.');
})
    ->middleware('signed')
    ->name('verification.verify');

// Google Authentication Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

// External Dashboard Routes
Route::prefix('external')->name('external.')->group(function () {

    Route::get('/{token}/dashboard', ExternalDashboard::class)
        ->name('dashboard');

    Route::get('/{token}', ExternalLogin::class)
        ->name('login');
});
