<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/modal_window/test-tailwind', function (){
    return view( '/modal_window/test-tailwind');
})->name('/modal_window/test-tailwind');

Route::get('/files/price-stavtrack.pdf', function () {
    $file = storage_path('public/files/price-stavtrack.pdf');
    return response()->file($file);
})->name('download.price');

Route::get('/menu-items', 'MenuItemsController@index');
