<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IslamicblogController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [IslamicblogController::class, 'index'])->name('home');
Route::get('/blog-category{id}', [IslamicblogController::class, 'category'])->name('blog-category');
Route::get('/blog-detail/{id}', [IslamicblogController::class, 'detail'])->name('blog-detail');
Route::get('/contact', [IslamicblogController::class, 'contact'])->name('contact');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class,'index'])->name('category.add');
    Route::post('/new-category', [CategoryController::class,'create'])->name('category.new');
    Route::get('/manage-category', [CategoryController::class,'manage'])->name('category.manage');
    Route::get('/edit-category/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::get('/delete-category/{id}', [CategoryController::class,'delete'])->name('category.delete');


    Route::get('/add-blog', [BlogController::class,'index'])->name('blog.add');
    Route::post('/new-blog', [BlogController::class,'create'])->name('blog.new');
    Route::get('/manage-blog', [BlogController::class,'manage'])->name('blog.manage');
    Route::get('/detail-blog-info/{id}', [BlogController::class,'detail'])->name('blog.detail');
    Route::get('/update-blog-status/{id}', [BlogController::class,'updateStatus'])->name('blog.status');
    Route::get('/edit-blog/{id}', [BlogController::class,'edit'])->name('blog.edit');
    Route::post('/update-blog/{id}', [BlogController::class,'update'])->name('blog.update');
    Route::get('/delete-blog/{id}', [BlogController::class,'delete'])->name('blog.delete');



});
