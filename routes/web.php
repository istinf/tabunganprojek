<?php
Use App\Http\Controllers\UserController;

Use App\Http\Controllers\PemakaianController;

Use App\Http\Controllers\SiswaController;

Use App\Http\Controllers\TabunganController;

Use App\Http\Controllers\TabunganprojekController;


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

Route::get('/', function () {
    return view('welcome');
    Route::resource('tabunganprojeks', TabunganprojekController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('v_home');

Route::get('/home', 'HomeController@index')->name('v_home');

Route::resource('tabungans', TabunganController::class);

Route::resource('siswas', SiswaController::class);

Route::resource('pemakaians', PemakaianController::class);

Route::resource('users', UserController::class);



