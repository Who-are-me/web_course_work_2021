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

Route::get('/', function () {
    return view('test_welcome');
});

Auth::routes([
	//'register' => false,
	'reset' => false 
]);

Route::get('/tidings', [App\Http\Controllers\Admin\NewsController::class, 'show']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'get_home'])->name('home');

Route::get('/backend', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin')->middleware(['auth']);

// Route::get('/backendLogin', [App\Http\Controllers\Admin\HomeController::class, 'login']);
// Route::get('/backend/register', 'App\Http\Controllers\Admin\RegisterAdminController@index');
// Route::post('/backend/register', 'App\Http\Controllers\Admin\RegisterAdminController@store');
// Route::post('/test', [App\Http\Controllers\Admin\HomeController::class, 'register']);


Route::resource('news', App\Http\Controllers\Admin\RegisterAdminController::class);

Route::resource('news', App\Http\Controllers\Admin\NewsController::class);

Route::middleware(['role:sudo'])->prefix('backend/register')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\RegisterAdminController::class, 'create']);
	Route::post('/', [App\Http\Controllers\Admin\RegisterAdminController::class, 'store']);
});