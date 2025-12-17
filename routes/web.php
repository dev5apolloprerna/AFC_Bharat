<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\LiveVideoMasterController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


use App\Http\Controllers\FrontviewController;

use App\Http\Controllers\Admin\GalleryMasterController;
use App\Http\Controllers\Admin\VideoGalleryController;

use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\CourseController;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return 'Cache is cleared';
});

Route::fallback(function () {
    return view('errors.404');
});

Route::get('/login', function () {
    return redirect()->route('login');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::get('/edit', [HomeController::class, 'EditProfile'])->name('EditProfile');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);

// Permissions
Route::resource('permissions', App\Http\Controllers\PermissionsController::class);

// Users
Route::middleware('auth')->prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id?}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('destroy');
    Route::get('/update/status/{user_id}/{status}', [UserController::class, 'updateStatus'])->name('status');
    Route::post('/password-update/{Id?}', [UserController::class, 'passwordupdate'])->name('passwordupdate');
    Route::get('/import-users', [UserController::class, 'importUsers'])->name('import');
    Route::post('/upload-users', [UserController::class, 'uploadUsers'])->name('upload');
    Route::get('export/', [UserController::class, 'export'])->name('export');
});


Route::prefix('admin')->name('admin.')->group(function () {

    // Country -> Universities
    Route::get('universities/by-country/{country_id}', [UniversityController::class, 'byCountry'])
        ->name('universities.byCountry');

    // University -> Faculties
    Route::get('faculties/by-university/{university_id}', [FacultyController::class, 'byUniversity'])
        ->name('faculties.byUniversity');

});


Route::prefix('admin')->group(function () {
    Route::get('gallery_master', [GalleryMasterController::class, 'index'])->name('admin.gallery_master.index');
    Route::post('gallery_master/store', [GalleryMasterController::class, 'store'])->name('admin.gallery_master.store');

    // ✅ correct update route
    Route::post('gallery_master/update/{id}', [GalleryMasterController::class, 'update'])->name('admin.gallery_master.update');

    Route::get('gallery_master/edit/{id}', [GalleryMasterController::class, 'edit'])->name('admin.gallery_master.edit');
    Route::delete('admin/gallery_master/delete/{id}', [GalleryMasterController::class, 'destroy'])->name('admin.gallery_master.destroy');
    Route::post('gallery_master/bulk-delete', [GalleryMasterController::class, 'bulkDelete'])->name('admin.gallery_master.bulk-delete');
    Route::post('/gallery_master/toggle-status/{album}', [GalleryMasterController::class, 'toggleStatus'])->name('admin.toggle-status');
});


Route::prefix('admin')->group(function () {

    Route::get('video_gallery', [VideoGalleryController::class, 'index'])->name('admin.video_gallery.index');
    Route::post('video_gallery/store', [VideoGalleryController::class, 'store'])->name('admin.video_gallery.store');
    Route::get('video_gallery/edit/{id}', [VideoGalleryController::class, 'edit'])->name('admin.video_gallery.edit');
    Route::post('video_gallery/update/{id}', [VideoGalleryController::class, 'update'])->name('admin.video_gallery.update');
    Route::post('video_gallery/delete', [VideoGalleryController::class, 'delete'])->name('admin.video_gallery.delete');
    Route::post('video_gallery/bulk-delete', [VideoGalleryController::class, 'bulkDelete'])->name('admin.video_gallery.bulk-delete');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('country', [CountryController::class, 'index'])->name('country.index');
    Route::post('country/store', [CountryController::class, 'store'])->name('country.store');
    Route::get('country/edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('country/update/{id}', [CountryController::class, 'update'])->name('country.update');
    Route::post('country/delete', [CountryController::class, 'destroy'])->name('country.destroy'); // bulk delete
    Route::get('country/delete/{id}', [CountryController::class, 'delete'])->name('country.delete'); // single delete
    Route::get('country/status/{id}', [CountryController::class, 'status'])->name('country.status'); // status toggle
});


Route::get('/', [FrontviewController::class, 'index'])->name('Front.index');
Route::get('/contact-us', [FrontviewController::class, 'ContactUs'])->name('Front.ContactUs');
Route::get('/about-us', [FrontviewController::class, 'AboutUs'])->name('Front.AboutUs');
Route::get('/image', [FrontviewController::class, 'image'])->name('Front.image');
Route::get('/image/detail/{slugname?}', [FrontviewController::class, 'imagedetail'])->name('Front.imagedetail');
Route::get('/video', [FrontviewController::class, 'video'])->name('Front.video');
Route::post('/ContactUs/sendmail', [FrontviewController::class, 'ContactUs_sendmail'])->name('Front.ContactUs_sendmail');
Route::get('/ThankYou', [FrontviewController::class, 'ThankYou'])->name('Front.ThankYou');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('university', [UniversityController::class, 'index'])->name('university.index');
    Route::get('university/create', [UniversityController::class, 'create'])->name('university.create');
    Route::post('university/store', [UniversityController::class, 'store'])->name('university.store');
    Route::get('university/edit/{id}', [UniversityController::class, 'edit'])->name('university.edit');
    Route::post('university/update/{id}', [UniversityController::class, 'update'])->name('university.update');
    Route::get('university/delete/{id}', [UniversityController::class, 'delete'])->name('university.delete');
    Route::post('university/delete', [UniversityController::class, 'destroy'])->name('university.destroy'); // bulk delete
    Route::get('university/status/{id}', [UniversityController::class, 'status'])->name('university.status');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('faculty', [FacultyController::class, 'index'])->name('faculty.index');
    Route::post('faculty/store', [FacultyController::class, 'store'])->name('faculty.store');
    Route::get('faculty/edit/{id}', [FacultyController::class, 'edit'])->name('faculty.edit');
    Route::post('faculty/update/{id}', [FacultyController::class, 'update'])->name('faculty.update');
    Route::get('faculty/delete/{id}', [FacultyController::class, 'delete'])->name('faculty.delete');
    Route::post('faculty/delete', [FacultyController::class, 'destroy'])->name('faculty.destroy'); // bulk delete
    Route::get('faculty/status/{id}', [FacultyController::class, 'status'])->name('faculty.status');
    Route::get('/universities/by-country/{countryId}',[FacultyController::class, 'universitiesByCountry'])->name('admin.universities.byCountry');

});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('course', [CourseController::class, 'index'])->name('course.index');
    Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('course/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
    Route::post('course/delete', [CourseController::class, 'destroy'])->name('course.destroy'); // bulk delete
    Route::get('course/status/{id}', [CourseController::class, 'status'])->name('course.status');
});


//--------------------------------------------Font Routes------------------------------------------------//


Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('Frontindex');
Route::get('/about', [App\Http\Controllers\Front\FrontController::class, 'about'])->name('Frontabout');
Route::get('/study-destination', [App\Http\Controllers\Front\FrontController::class, 'destination'])->name('Frontdestination');
Route::get('/study-program', [App\Http\Controllers\Front\FrontController::class, 'program'])->name('Frontprogram');
Route::get('/gallery', [App\Http\Controllers\Front\FrontController::class, 'gallery'])->name('Frontgallery');
Route::get('/contact', [App\Http\Controllers\Front\FrontController::class, 'contact'])->name('Frontcontact');
Route::get('/apply-franchisee', [App\Http\Controllers\Front\FrontController::class, 'franchisee'])->name('Frontfranchisee');
Route::get('/apply-admission', [App\Http\Controllers\Front\FrontController::class, 'admission'])->name('Frontadmission');



// Route::post('/inquiry/store', [App\Http\Controllers\Front\FrontController::class, 'storeInquiry'])->name('inquiry.store');