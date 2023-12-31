<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
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

Route::get('/welcome', function () {
    return view('welcome');  
});

Route::get('/', function () {
    $categories = Category::all();
    return view('categories', ['categories' => $categories]);
   })->name('index');

Route::post(
    '/categories',
    [CategoryController::class, 'create']
   )->name('category.create');

