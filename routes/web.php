<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitesettingController;
use App\Http\Controllers\BannerSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CasestudiesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TechnologiesController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;

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
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us-post', [ContactController::class, 'contact_us_post'])->name('contact_us_post');


Route::group(['middleware' => 'auth'], function () {
// Site settings
Route::get('/site-settings', [SitesettingController::class, 'index'])->name('sitesettingsindex');
Route::post('/site-settings-post', [SitesettingController::class, 'siteSettingsSubmit'])->name('siteSettingsSubmit');
// Site settings



// contacts settings
Route::get('/all-contacts', [ContactController::class, 'all_contact'])->name('all_contact');
Route::get('/all-contacts-delete/{id}', [ContactController::class, 'contactsDelete'])->name('contactsDelete');
// contacts settings

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// Section Settings
Route::get('/banner-section-settings', [BannerSectionController::class, 'index'])->name('bannersectionsettingsindex');
Route::get('/banner-disable', [BannerSectionController::class, 'disable_banner'])->name('disable_banner');
Route::get('/banner-enable', [BannerSectionController::class, 'enable_banner'])->name('enable_banner');
Route::post('/banner-section-settings-post', [BannerSectionController::class, 'BannerSection'])->name('BannerSectionPost');

// Section Settings

// Case Study
Route::get('/case-studies', [CasestudiesController::class, 'CasestudiesIndex'])->name('CasestudiesIndex');
Route::post('/case-studies-post', [CasestudiesController::class, 'CasestudiesPost'])->name('CasestudiesPost');
Route::get('/case-studies-delete/{id}', [CasestudiesController::class, 'deleteCase'])->name('deleteCase');
// Case Study

// Services Section
Route::get('/our-Services', [ServiceController::class, 'index'])->name('ServiceIndex');
Route::get('/our-Services-all', [ServiceController::class, 'allServices'])->name('allServices');
Route::get('/our-Services-delete/{id}', [ServiceController::class, 'ServiceDelete'])->name('ServiceDelete');
Route::get('/our-Services-view/{id}', [ServiceController::class, 'ServiceView'])->name('ServiceView');
Route::post('/our-Services-post', [ServiceController::class, 'ServicePost'])->name('ServicePost');
// Services Section

// Our clients
Route::get('/our-clients', [ClientController::class, 'index'])->name('ClientIndex');
Route::post('/our-clients-post', [ClientController::class, 'clientPost'])->name('clientPost');
Route::get('/our-clients-delete/{id}', [ClientController::class, 'clientDelete'])->name('clientDelete');
// Our clients

// Our Technologies
Route::get('/our-technologies', [TechnologiesController::class, 'techIndex'])->name('techIndex');
Route::get('/our-technologies-delete/{id}', [TechnologiesController::class, 'techDelete'])->name('techDelete');
Route::post('/our-technologies-post', [TechnologiesController::class, 'techPost'])->name('techPost');
// Our Technologies

// Video section
Route::get('/video-section', [VideoController::class, 'videoIndex'])->name('videoIndex');
Route::post('/video-section-post', [VideoController::class, 'videoPost'])->name('videoPost');
// Video section

// About us
Route::get('/about-us-admin', [AboutusController::class, 'AbountIndex'])->name('AbountIndex');
Route::post('/about-us-post', [AboutusController::class, 'AboutusPost'])->name('AboutusPost');
Route::post('/about-worked-post', [AboutusController::class, 'Worked'])->name('Worked');
Route::get('/about-worked-delete/{id}', [AboutusController::class, 'workedDelete'])->name('workedDelete');

// About us
// Footer Section
Route::get('/footer-section', [FooterController::class, 'footer_section'])->name('footer_section');
// Footer Section

// Background
Route::post('/client-background', [ClientController::class, 'clientBg'])->name('clientBg');
Route::post('/video-background', [VideoController::class, 'videoBg'])->name('videoBg');
Route::post('/footer-background', [FooterController::class, 'footer_background_post'])->name('footer_background_post');
// Background
});


Route::get('/logout', [FrontEndController::class, function(){
    Auth::logout();
    return redirect('/login');
}])->name('logout');
require __DIR__.'/auth.php';
