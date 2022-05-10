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
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SectionsController;

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

Route::get('ucenici', [StudentsController::class, 'getAllStudents']);

Route::get('kontakt', [PagesController::class, 'kontakt']);

Route::get('novosti', [PostsController::class, 'getAllPosts']);

Route::get('novosti/{slug}', [PostsController::class, 'showSinglePost']);

//Route::get('kalendar', [PagesController::class, 'kalendar']);

//Route::get('projekti', [PagesController::class, 'projekti']);

Route::get('raspored', [PagesController::class, 'raspored']);

//Route::get('sekcije', [PagesController::class, 'sekcije']);

Route::get('aktivi', [PagesController::class, 'aktivi']);
Route::get('kalendar', [CalendarController::class, 'showCalendar']);

Route::get('raspored', [ScheduleController::class, 'showSchedule']);

Route::get('sekcije', [SectionsController::class, 'getAllSections']);

Route::get('sekcije/{slug}', [SectionsController::class, 'showSingleSection']);

Route::get('aktivi', [AssetsController::class, 'getAllAssets']);

Route::get('aktivi/{slug}', [AssetsController::class, 'showSingleAsset']);

Route::get('projekti', [ProjectsController::class, 'getAllProjects']);

Route::get('projekti/{slug}', [ProjectsController::class, 'showSingleProject']);

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

        Route::get('kalendar', [CalendarController::class, 'index']);
        Route::get('kalendar/kreiraj', [CalendarController::class, 'create']);
        Route::post('kalendar', [CalendarController::class, 'store']);
        Route::delete('kalendar/{calendarId}', [CalendarController::class, 'destroy']);

        Route::get('raspored', [ScheduleController::class, 'index']);
        Route::get('raspored/kreiraj', [ScheduleController::class, 'create']);
        Route::post('raspored', [ScheduleController::class, 'store']);
        Route::delete('raspored/{scheduleId}', [ScheduleController::class, 'destroy']);

        Route::get('projekti', [ProjectsController::class, 'index']);
        Route::get('projekti/kreiraj', [ProjectsController::class, 'create']);
        Route::post('projekti', [ProjectsController::class, 'store']);
        Route::get('projekti/{projectId}/uredi', [ProjectsController::class, 'edit']);
        Route::put('projekti/{projectId}', [ProjectsController::class, 'update']);
        Route::delete('projekti/{projectId}', [ProjectsController::class, 'delete']);

        Route::get('aktivi', [AssetsController::class, 'index']);
        Route::get('aktivi/kreiraj', [AssetsController::class, 'create']);
        Route::post('aktivi', [AssetsController::class, 'store']);
        Route::get('aktivi/{assetId}/uredi', [AssetsController::class, 'edit']);
        Route::put('aktivi/{assetId}', [AssetsController::class, 'update']);
        Route::delete('aktivi/{assetId}', [AssetsController::class, 'delete']);

        Route::get('sekcije', [SectionsController::class, 'index']);
        Route::get('sekcije/kreiraj', [SectionsController::class, 'create']);
        Route::post('sekcije', [SectionsController::class, 'store']);
        Route::get('sekcije/{sectionId}/uredi', [SectionsController::class, 'edit']);
        Route::put('sekcije/{sectionId}', [SectionsController::class, 'update']);
        Route::delete('sekcije/{sectionId}', [SectionsController::class, 'delete']);

        Route::post('odjava', [LoginController::class, 'logout'])->name('logout');
    });
});
