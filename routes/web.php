<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/policy', function () {
    return view('policy');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/become-a-christian', function () {
    return view('pages.become-a-christian');
});
Route::get('/read-the-bible', function () {
    return view('pages.read-the-bible');
});

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/donation-success', function () {
        return view('donation-success');
    })->name('donation.success');

    Route::get('/donation-failure', function () {
        return view('donation-failure');
    })->name('donation.failure');

    Route::get('/donate', function () {
        return view('pages.donate');
    });
    Route::get('/partner', function () {
        return view('pages.partner');
    });

    Route::get('/thank-you', function () {
        return view('pages.thank-you');
    });
});

Route::post('/webhook/flutterwave', [WebhookController::class, 'handleWebhook'])->name('webhook.flutterwave');
Route::get('/webhook/flutterwave', [WebhookController::class, 'handleRedirect'])->name('webhook.flutterwave.get');
