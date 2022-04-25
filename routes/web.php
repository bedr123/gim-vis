<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexSliderController;
use App\Http\Controllers\DirectionsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\DirectionsGalleryController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GalleryController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('smjerovi/{slug}', [DirectionsController::class, 'showSingleDirection']);

Route::get('o-skoli', [PagesController::class, 'oSkoli']);

Route::get('historija', [PagesController::class, 'historija']);

Route::get('o-skoli', [PagesController::class, 'oSkoli']);

Route::get('kodeks', [PagesController::class, 'kodeks']);

Route::get('uposlenici', [EmployeesController::class, 'getAllEmployees']);

Route::get('kontakt', [PagesController::class, 'kontakt']);

Route::get('novosti', function () {
    return view('novosti');
});

Route::get('prijava', [LoginController::class, 'showLogin']);
Route::post('prijava', [LoginController::class, 'login'])->name('login');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('slajdovi', [IndexSliderController::class, 'index']);
        Route::get('slajdovi/kreiraj', [IndexSliderController::class, 'create']);
        Route::post('slajdovi', [IndexSliderController::class, 'store']);
        Route::get('slajdovi/{slideId}/uredi', [IndexSliderController::class, 'edit']);
        Route::put('slajdovi/{slideId}', [IndexSliderController::class, 'update']);
        Route::delete('slajdovi/{slideId}', [IndexSliderController::class, 'delete']);

        Route::get('smjerovi', [DirectionsController::class, 'index']);
        Route::get('smjerovi/kreiraj', [DirectionsController::class, 'create']);
        Route::post('smjerovi', [DirectionsController::class, 'store']);
        Route::get('smjerovi/{directionId}/uredi', [DirectionsController::class, 'edit']);
        Route::put('smjerovi/{directionId}', [DirectionsController::class, 'update']);
        Route::delete('smjerovi/{directionId}', [DirectionsController::class, 'delete']);

        Route::get('novosti', [PostsController::class, 'index']);
        Route::get('novosti/kreiraj', [PostsController::class, 'create']);
        Route::post('novosti', [PostsController::class, 'store']);
        Route::get('novosti/{postId}/uredi', [PostsController::class, 'edit']);
        Route::put('novosti/{postId}', [PostsController::class, 'update']);
        Route::delete('novosti/{postId}', [PostsController::class, 'delete']);

        Route::get('kategorije', [CategoriesController::class, 'index']);
        Route::get('kategorije/kreiraj', [CategoriesController::class, 'create']);
        Route::post('kategorije', [CategoriesController::class, 'store']);
        Route::delete('kategorije/{categoryId}', [CategoriesController::class, 'delete']);

        Route::get('uposlenici', [EmployeesController::class, 'index']);
        Route::get('uposlenici/kreiraj', [EmployeesController::class, 'create']);
        Route::post('uposlenici', [EmployeesController::class, 'store']);
        Route::get('uposlenici/{employeeId}/uredi', [EmployeesController::class, 'edit']);
        Route::put('uposlenici/{employeeId}', [EmployeesController::class, 'update']);
        Route::delete('uposlenici/{employeeId}', [EmployeesController::class, 'delete']);

        Route::get('ucenici', [StudentsController::class, 'index']);
        Route::get('ucenici/kreiraj', [StudentsController::class, 'create']);
        Route::post('ucenici', [StudentsController::class, 'store']);
        Route::get('ucenici/{studentId}/uredi', [StudentsController::class, 'edit']);
        Route::put('ucenici/{studentId}', [StudentsController::class, 'update']);
        Route::delete('ucenici/{studentId}', [StudentsController::class, 'delete']);

        Route::get('galerija', [GalleryController::class, 'index']);
        Route::get('galerija/{id}', [GalleryController::class, 'showGallery']);
        Route::post('galerija/{id}', [GalleryController::class, 'store']);
        Route::delete('galerija/{id}/slika/{imageId}', [GalleryController::class, 'deleteImage']);

        Route::post('odjava', [LoginController::class, 'logout'])->name('logout');
    });
});
