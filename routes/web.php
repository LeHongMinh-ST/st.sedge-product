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
<<<<<<< HEAD

Route::get('/login', fn () => view('login.login'));
Route::get('/admin', fn () => view('admin.pages.dashboard.index'));
=======
Route::get('/', fn () => view('admin.pages.dashboard.index'));
Route::get('/admin', fn () => view('admin.pages.dashboard.index'));

>>>>>>> 24e866e (refactor: [SSP-6] delete file JS unnecessaryè)
