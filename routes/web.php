<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitesettingController;
use App\Http\Controllers\BannerSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CasestudiesController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');



// Site settings
Route::get('/site-settings', [SitesettingController::class, 'index'])->name('sitesettingsindex');
Route::post('/site-settings-post', [SitesettingController::class, 'siteSettingsSubmit'])->name('siteSettingsSubmit');
// Site settings


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// Section Settings
Route::get('/banner-section-settings', [BannerSectionController::class, 'index'])->name('bannersectionsettingsindex');
Route::get('/banner-disable', [BannerSectionController::class, 'disable_banner'])->name('disable_banner');
Route::get('/banner-enable', [BannerSectionController::class, 'enable_banner'])->name('enable_banner');
Route::post('/banner-section-settings-post', [BannerSectionController::class, 'BannerSection'])->name('BannerSectionPost');

// Section Settings

Route::get('/case-studies', [CasestudiesController::class, 'CasestudiesIndex'])->name('CasestudiesIndex');
Route::post('/case-studies-post', [CasestudiesController::class, 'CasestudiesPost'])->name('CasestudiesPost');
Route::get('/case-studies-delete/{id}', [CasestudiesController::class, 'deleteCase'])->name('deleteCase');

// Services Section
Route::get('/our-Services', [ServiceController::class, 'index'])->name('ServiceIndex');
Route::get('/our-Services-all', [ServiceController::class, 'allServices'])->name('allServices');
Route::get('/our-Services-delete/{id}', [ServiceController::class, 'ServiceDelete'])->name('ServiceDelete');
Route::get('/our-Services-view/{id}', [ServiceController::class, 'ServiceView'])->name('ServiceView');
Route::post('/our-Services-post', [ServiceController::class, 'ServicePost'])->name('ServicePost');

// Services Section

Route::get('/logout', [FrontEndController::class, function(){
    Auth::logout();
    return redirect('/login');
}])->name('logout');
require __DIR__.'/auth.php';
