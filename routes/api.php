<?php

use App\Http\Controllers\admin\CaseStudyApiController;
use App\Http\Controllers\admin\BlogApiController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPageController;
use App\Http\Controllers\AdminManageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/caseStudyFirstRows', [UserPageController::class, 'home']);
Route::get('/blogs', [UserPageController::class, 'blogs']);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('/register', [AdminManageController::class, 'register']);
    Route::post('/login', [AdminManageController::class, 'login'])->name('login');
    Route::middleware(('auth:sanctum'))->resource('case-studies', CaseStudyApiController::class);
    Route::middleware(('auth:sanctum'))->resource('manage-blogs', BlogApiController::class);
    Route::middleware(('auth:sanctum'))->resource('home-videos', HomeController::class);
    Route::middleware(('auth:sanctum'))->resource('services', ServiceController::class);
});
Route::middleware(('auth:sanctum'))->post('admin/logout', [AdminManageController::class, 'logout']);
// });
