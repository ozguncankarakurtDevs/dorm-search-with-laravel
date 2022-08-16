<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\front\indexController::class, 'index'])->name('index');
Route::get('/yurtlar/detay/{selflink}',[App\Http\Controllers\front\yurtlar\indexController::class, 'index'])->name('yurtlar.detay');

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\admin\indexController::class, 'index'])->name('index');

    Route::group(['namespace' => 'yurtlar', 'prefix' => 'yurtlar', 'as' => 'yurtlar.'], function () {
        Route::get('/', [App\Http\Controllers\admin\yurtlar\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\yurtlar\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\yurtlar\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\yurtlar\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\yurtlar\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\yurtlar\indexController::class, 'delete'])->name('delete');


    });

    /* Route::group(['namespace' => 'kategori', 'prefix' => 'kategori', 'as' => 'kategori.'], function () {
        Route::get('/', [App\Http\Controllers\admin\kategori\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\kategori\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\kategori\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\kategori\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\kategori\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\kategori\indexController::class, 'delete'])->name('delete');


    });
    Route::group(['namespace' => 'slider', 'prefix' => 'slider', 'as' => 'slider.'], function () {
        Route::get('/', [App\Http\Controllers\admin\slider\indexController::class, 'index'])->name('index');
        Route::get('/ekle', [App\Http\Controllers\admin\slider\indexController::class, 'create'])->name('create');
        Route::post('/ekle', [App\Http\Controllers\admin\slider\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}', [App\Http\Controllers\admin\slider\indexController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}', [App\Http\Controllers\admin\slider\indexController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}', [App\Http\Controllers\admin\slider\indexController::class, 'delete'])->name('delete');


    });
*/
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
