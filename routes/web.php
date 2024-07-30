<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\EnergieController;
use App\Http\Controllers\EnvironnementController;
use App\Http\Controllers\Genie_CivilController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ServicesDetailController;
use App\Http\Controllers\Import_ExportController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Les routes des vues website
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services_details', [ServicesDetailController::class, 'index'])->name('services_details');
Route::get('/details', [DetailController::class, 'index'])->name('details');
Route::get('/showroom', [ShowroomController::class, 'index'])->name('showroom');
Route::get('/presentation', [PresentationController::class, 'index'])->name('presentation');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/devis', [DevisController::class, 'index'])->name('devis');
Route::get('/energie', [EnergieController::class, 'index'])->name('energie');
Route::get('/environnement', [EnvironnementController::class, 'index'])->name('environnement');
Route::get('/import_export', [Import_ExportController::class, 'index'])->name('import_export');
Route::get('/genie_civil', [Genie_CivilController::class, 'index'])->name('genie_civil');

