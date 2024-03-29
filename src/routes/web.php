<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, 'index']);
Route::post('/contacts/confirm', [TestController::class, 'confirm']);
Route::post('/contacts/thanks', [TestController::class, 'thanks']);
Route::get('/admin', [TestController::class, 'admin']);

