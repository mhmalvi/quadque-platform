<?php

use App\Http\Controllers\UserPageController;
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

Route::get('/', [UserPageController::class, 'home'])->name('home');
Route::get('/start-project', [UserPageController::class, 'startProject'])->name('startProject');
Route::get('/customers', [UserPageController::class, 'customers'])->name('customers');
