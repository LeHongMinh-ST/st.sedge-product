<?php

declare(strict_types=1);

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

// Route::get('link-storage', function (): void {
//     $targetFolder = storage_path('app/public');
//     $link = $_SERVER['DOCUMENT_ROOT'] . '/storage';
//     symlink($targetFolder, $link);
// });
