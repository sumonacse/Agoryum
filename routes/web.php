<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitesettingController;
use App\Http\Controllers\BannerSectionController;

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
});


// Site settings
Route::get('/site-settings', [SitesettingController::class, 'index'])->name('sitesettingsindex');
Route::post('/site-settings-post', [SitesettingController::class, 'siteSettingsSubmit'])->name('siteSettingsSubmit');
// Site settings

// Section Settings
Route::get('/banner-section-settings', [BannerSectionController::class, 'index'])->name('bannersectionsettingsindex');
Route::post('/banner-section-settings-post', [BannerSectionController::class, 'BannerSection'])->name('BannerSectionPost');

// Section Settings

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/logout', [FrontEndController::class, function(){
    Auth::logout();
    return redirect('/login');
}])->name('logout');
require __DIR__.'/auth.php';
