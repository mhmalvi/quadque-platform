<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;
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
Route::get('/case-study', [UserPageController::class, 'caseStudy'])->name('caseStudy');
Route::get('/get/case-study/more/{num}', [CaseStudyController::class, 'getMore']);
Route::get('/get/case-study/all', [CaseStudyController::class, 'getAll']);
Route::get('/blogs', [UserPageController::class, 'blog'])->name('blogs');
Route::get('/see/more/blog', [BlogController::class, 'fetchBlog']);
Route::get('/get/blog/{id}', [BlogController::class, 'getBlog']);
Route::get('/about-us', [UserPageController::class, 'aboutUs'])->name('about');
Route::get('/testimonials', [UserPageController::class, 'testimonials'])->name('testimonials');
Route::get('/media-buying', [UserPageController::class, 'mediaBuying'])->name('media.buying');
Route::get('/category', [UserPageController::class, 'category'])->name('category');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'preventBackHistory'])->group(function () {
        Route::get('/login', [AdminController::class, 'login'])->name('login');
        Route::post('/login/check', [AdminController::class, 'check']);
        Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
        Route::post('/signup/store', [AdminController::class, 'store'])->name('signup.store');
    });
    Route::middleware(['auth:admin', 'preventBackHistory'])->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // case study route
        Route::get('/case-study', [CaseStudyController::class, 'show'])->name('casestudy');
        Route::get('/case-study/get', [CaseStudyController::class, 'index']);
        Route::post('/case-study/store', [CaseStudyController::class, 'store'])->name('case-study.store');
        Route::get('/case-study/edit/{id}', [CaseStudyController::class, 'edit']);
        Route::post('/case-study/update/', [CaseStudyController::class, 'update']);
        Route::get('/case-study/delete/{id}', [CaseStudyController::class, 'destroy']);

        //blogs route
        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog/get', [BlogController::class, 'fetchBlog'])->name('blog.get');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
        Route::post('/blog/update/', [BlogController::class, 'update']);
        Route::get('/blog/delete/{id}', [BlogController::class, 'destroy']);

        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
