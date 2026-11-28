<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Redirect /tr and /tr/{any} to clean non-prefixed Turkish URLs (301 Permanent Redirect)
Route::redirect('/tr', '/', 301);
Route::get('/tr/{any}', function ($any) {
    $query = request()->getQueryString();
    return redirect('/' . $any . ($query ? '?' . $query : ''), 301);
})->where('any', '.*');

// Default Turkish routes (clean URL without prefix)
Route::middleware(['locale'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('tr.home');

    Route::get('/about', function () {
        return view('about');
    })->name('tr.about');

    Route::get('/services', function () {
        return view('services');
    })->name('tr.services');

    Route::get('/industries', function () {
        return view('industries');
    })->name('tr.industries');

    Route::get('/how-we-work', function () {
        return view('how-we-work');
    })->name('tr.how-we-work');

    Route::get('/contact', function () {
        return view('contact');
    })->name('tr.contact');
});

// Localized routes for English ('en') and German ('de')
Route::prefix('{locale}')
    ->whereIn('locale', ['en', 'de'])
    ->middleware(['locale'])
    ->name('locale.')
    ->group(function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        Route::get('/about', function () {
            return view('about');
        })->name('about');

        Route::get('/services', function () {
            return view('services');
        })->name('services');

        Route::get('/industries', function () {
            return view('industries');
        })->name('industries');

        Route::get('/how-we-work', function () {
            return view('how-we-work');
        })->name('how-we-work');

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');

Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');

require __DIR__.'/auth.php';
