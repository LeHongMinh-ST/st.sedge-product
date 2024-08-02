<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashbroadController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\ShopController;
use Illuminate\Support\Facades\Artisan;
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
Route::prefix('')->group(function (): void {
    // Route::get('/', fn () => view('client.pages.index'))->name('todo.home');
    Route::get('/', [ShopController::class, 'home'])->name('todo.home');
    Route::get('/collection', [ShopController::class, 'index'])->name('todo.collection');
    Route::get('/product/{id}', [ShopController::class, 'show'])->name('client.product.details');
    Route::get('/product/{id}/quickview', [ShopController::class, 'quickView'])->name('product.quickview');
    Route::get('/blog', [ShopController::class, 'blog'])->name('client.blog');
    Route::get('/blog/{id}', [ShopController::class, 'detailBlog'])->name('client.blog.detail');
    Route::get('contact', fn () => view('client.pages.contact'))->name('todo.contact');

});


// Route::get('/product', fn () => view('client.pages.product'))->name('todo.product');

Route::get('cart', fn () => view('client.pages.cart'))->name('todo.cart');
//Route::get('article', fn () => view('client.pages.article'))->name('todo.article');
Route::get('check-order', fn () => view('client.pages.check_order'))->name('todo.checkorder');

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
    Route::prefix('/product')->group(function (): void {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/{id}/update', [ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/{id}/delete', [ProductController::class, 'delete'])->name('admin.products.delete');
        Route::get('/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    });

    Route::prefix('/category')->group(function (): void {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
    });

    Route::prefix('/post')->group(function (): void {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('/store', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('{id}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
        Route::put('{id}/update', [PostController::class, 'update'])->name('admin.post.update');
        Route::delete('{id}/delete', [PostController::class, 'delete'])->name('admin.post.delete');
        Route::get('/{id}', [PostController::class, 'show'])->name('admin.post.show');
        Route::post('/upload-image', [PostController::class, 'uploadImage'])->name('admin.post.upload-image');
    });
});
Route::get('/product', fn () => view('client.pages.product_template'))->name('todo.product');
Route::get('/checkout', fn () => view('client.pages.checkout'))->name('todo.checkout');
Route::get('/product', fn () => view('client.pages.product_template'))->name('todo.product');
