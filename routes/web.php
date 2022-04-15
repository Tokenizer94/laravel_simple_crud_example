<?php

use App\Http\Controllers\GuitarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/abou', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('guitars', GuitarController::class);

Route::get('/query', [HomeController::class, 'query']);

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
  if (isset($category)) {
    if (isset($item)) {
      return "You are viewing the store for {$category} for {$item}";
    }
    return "You are viewing the store for " . strip_tags($category);
  }
  return 'You are viewing all store items';
});
