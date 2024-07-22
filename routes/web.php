<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\ServiceController;
use App\Models\Library;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


Route::get('/about', function () {
    return view('About', ['title' => 'About Us']);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan']);
});
Route::get('/faq', function () {
    return view('FAQ', ['title' => 'FAQ']);
});
Route::get('/libary', function () {
    return view('Libary', ['title' => 'Libary']);
});
Route::get('/karir', function () {
    return view('Karir', ['title' => 'Karir']);
});
Route::get('/contact', function () {
    return view('Contact', ['title' => 'Contact']);
});
Route::get('/regulasi', function () {
    return view('regulasi', ['title' => 'Regulasi']);
});


// Route::get('/admin/faq', function () {
//     return view('admin.admin-faq');
// });

Route::get('/admin/faq/insert', function () {
    return view('admin.admin-faq-insert');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage faqs')->group(function () {
            Route::resource('faqs', FaqController::class);
        });
        Route::middleware('can:manage libraries')->group(function () {
            Route::resource('libraries', LibraryController::class);
        });
        Route::middleware('can:manage regulations')->group(function () {
            Route::resource('regulations', RegulationController::class);
        });
        Route::middleware('can:manage services')->group(function () {
            Route::resource('services', ServiceController::class);
        });
    });
});

require __DIR__ . '/auth.php';
