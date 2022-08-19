<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Auth::routes(['verify' => true ]);

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes(['verify' => true ]);

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes(['verify' => true ]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true ]);

//Route::get('/categories', 'CategoryController@index');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.categories.index');

//Route::get('/menu-editor/{any?}', 'AdminController@menu')->middleware('can:edit-menu')->where('any','.*');

Route::get('/menu-editor/{any?}', [App\Http\Controllers\AdminController::class, 'menu'])->middleware('can:edit-menu')->where('any','.*');

