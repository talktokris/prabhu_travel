<?php

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


Route::get('/', function () {
  //  return view('welcome');
    return view('prabhu.public.home_page');
});
*/

Auth::routes();



//Route::get('/homepage', [App\Http\Controllers\homePageController::class, 'index'])->name('home');

Route::get('/home', function () { return redirect("/pb/admin/dashboard"); });
Route::get('/login', function () { return redirect("/pb/admin/login"); });

Route::get('/', [App\Http\Controllers\homePageController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\aboutPageController::class, 'index'])->name('about');
Route::get('/services', [App\Http\Controllers\aboutPageController::class, 'services'])->name('services');
Route::get('/licenses', [App\Http\Controllers\aboutPageController::class, 'licensing'])->name('licensing');
Route::get('/contact', [App\Http\Controllers\contactPageController::class, 'index'])->name('contact');
Route::get('/search', [App\Http\Controllers\tourSearchController::class, 'index'])->name('search');
Route::get('/search/top/{id}', [App\Http\Controllers\tourSearchController::class, 'topDestination'])->name('topDestination');
Route::get('/search/type/{id}', [App\Http\Controllers\tourSearchController::class, 'tourType'])->name('tourType');
//Route::get('/tour-view/{id}', [App\Http\Controllers\tourViewController::class, 'index'])->name('tour-view');

Route::match(array('GET','POST'),'/tour-view/{id}', [App\Http\Controllers\tourViewController::class, 'index'])->name('tour-view');

Route::get('/booking-process/{hash_id}', [App\Http\Controllers\tourViewController::class, 'bookProcessed'])->name('booking-process');



Route::get('/tour-ajex-get/{where}/{type}', [App\Http\Controllers\tourSearchController::class, 'tourAjexSubmit'])->name('tour-ajex-submit');

Route::get('/pb/admin/login', [App\Http\Controllers\adminDashboardController::class, 'login'])->name('pb-admin-login');


Route::group(['middleware'=>['auth']], function(){

  Route::get('/pb/admin/register', [App\Http\Controllers\adminDashboardController::class, 'register'])->name('pb-admin-register');
  Route::get('/pb/admin/dashboard', [App\Http\Controllers\adminDashboardController::class, 'index'])->name('pb-admin-dashboard');
  Route::get('/pb/admin/users', [App\Http\Controllers\adminUserController::class, 'index'])->name('pb-admin-users');

  Route::get('/pb/admin/setting-home-page', [App\Http\Controllers\adminSettingController::class, 'home'])->name('pb-admin-setting-home-page');
  
  Route::match(array('GET','POST'),'/pb/admin/home-status-action/{hash_id}', [App\Http\Controllers\adminSettingController::class, 'homeAction'])->name('pb-admin-home-status-action');
  //Route::get('/pb/admin/setting-tour-category', [App\Http\Controllers\adminSettingController::class, 'tour'])->name('pb-admin-setting-tour-category');
  Route::match(array('GET','POST'),'/pb/admin/setting-tour-category', [App\Http\Controllers\adminSettingController::class, 'tour'])->name('pb-admin-setting-tour-category');
  Route::match(array('GET','POST'),'/pb/admin/setting-tour-category/edit/{hash_id}', [App\Http\Controllers\adminSettingController::class, 'tourEdit'])->name('pb-admin-setting-tour-category-edit');
  Route::get('/pb/admin/setting-tour-category/delete/{hash_id}', [App\Http\Controllers\adminSettingController::class, 'tourDelete'])->name('pb-admin-setting-tour-category-delete');
  
  Route::match(array('GET','POST'),'/pb/admin/setting-destination', [App\Http\Controllers\adminSettingController::class, 'destinaton'])->name('pb-admin-setting-destination');
  Route::match(array('GET','POST'),'/pb/admin/setting-destination/edit/{hash_id}', [App\Http\Controllers\adminSettingController::class, 'destinatonEdit'])->name('pb-admin-setting-tour-category-edit');
  Route::get('/pb/admin/setting-destination/delete/{hash_id}', [App\Http\Controllers\adminSettingController::class, 'destinationDelete'])->name('pb-admin-setting-tour-category-delete');
  Route::match(array('GET','POST'),'/pb/admin/destination/image-upload/{hash_id}', [App\Http\Controllers\adminSettingController::class, 'destinationImageUpload'])->name('pb-admin-destination-image-upload');


  Route::match(array('GET','POST'),'/pb/admin/package-create', [App\Http\Controllers\adminPackageController::class, 'create'])->name('pb-admin-package-create');
  Route::match(array('GET','POST'),'/pb/admin/package/edit/{hash_id}', [App\Http\Controllers\adminPackageController::class, 'edit'])->name('pb-admin-package-edit');
  Route::get('/pb/admin/package/delete-confirm/{hash_id}', [App\Http\Controllers\adminPackageController::class, 'deleteConfirm'])->name('pb-admin-package-delete-confirm');
  
  Route::get('/pb/admin/package/delete/{hash_id}', [App\Http\Controllers\adminPackageController::class, 'delete'])->name('pb-admin-package-delete');
  Route::match(array('GET','POST'),'/pb/admin/package/image-upload/{hash_id}', [App\Http\Controllers\adminPackageController::class, 'imageUpload'])->name('pb-admin-package-create');
  Route::get('  pb/admin/package/delete-image/{hash_id}/{pack_id}', [App\Http\Controllers\adminPackageController::class, 'deleteImage'])->name('pb-admin-package-delete-image');



  Route::get('/pb/admin/package-search', [App\Http\Controllers\adminPackageController::class, 'search'])->name('pb-admin-package-search');
  Route::get('/pb/admin/booking-pending', [App\Http\Controllers\adminBookingController::class, 'pending'])->name('pb-admin-booking-pending');
  Route::get('/pb/admin/booking-recent', [App\Http\Controllers\adminBookingController::class, 'recentBooking'])->name('pb-admin-booking-recent');
  Route::get('/pb/admin/booking-search', [App\Http\Controllers\adminBookingController::class, 'search'])->name('pb-admin-booking-search');
  Route::get('/pb/admin/report-booking', [App\Http\Controllers\adminReportController::class, 'index'])->name('pb-admin-report-booking');


});

Auth::routes();


//Route::get('/destination-json/{query}', [App\Http\Controllers\tourSearchController::class, 'destinationJson'])->name('destination-json');



/*

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
