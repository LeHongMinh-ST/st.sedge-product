<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashbroadController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', fn () => view('admin.pages.dashboard.index'));
Route::get('/', fn () => view('client.pages.index'))->name('todo.home');
Route::get('collection', fn () => view('client.pages.collection'))->name('todo.collection');
Route::get('contact', fn () => view('client.pages.contact'))->name('todo.contact');

// Route::get('link-storage', function (): void {
//     $targetFolder = storage_path('app/public');
//     $link = $_SERVER['DOCUMENT_ROOT'] . '/storage';
//     symlink($targetFolder, $link);
// });

// Clear application cache:
Route::get('/op-cache', function () {
    Artisan::call('optimize:clear');

    return 'Application op cache has been cleared';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');

    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');

    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');

    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');

    return 'View cache has been cleared';
});

Route::prefix('login')->group(function (): void {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/post', [AuthController::class, 'login'])->name('login.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::prefix('admin')->middleware('auth')->group(function (): void {
    Route::get('/', [DashbroadController::class, 'index'])->name('admin.dashboard');
});