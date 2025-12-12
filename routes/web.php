<?php
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InquiryController;


Route::fallback(function () {
     return view('errors.404');
});

Route::get('/login', function () {
    return redirect()->route('login');
});


Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::get('/edit', [HomeController::class, 'EditProfile'])->name('EditProfile');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Roles
Route::resource('roles', RolesController::class);

// Permissions
Route::resource('permissions', PermissionsController::class);

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

 
    Route::prefix('admin/video')->name('admin.video.')->group(function () {
        Route::get('/',            [VideoController::class, 'index'])->name('index');
        Route::post('/',           [VideoController::class, 'store'])->name('store');
        Route::put('/{video}',     [VideoController::class, 'update'])->name('update');
        Route::delete('/{video}',  [VideoController::class, 'destroy'])->name('destroy');
        Route::post('/bulk-delete',[VideoController::class, 'bulkDelete'])->name('bulk-delete');
        
        Route::patch('/{video}/toggle-status', [VideoController::class, 'toggleStatus'])->name('toggle-status');
    });

    
    Route::prefix('admin/gallery')->name('admin.gallery.')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index');
        Route::post('/', [GalleryController::class, 'store'])->name('store');
        Route::put('/{gallery}', [GalleryController::class, 'update'])->name('update');
        Route::delete('/{gallery}', [GalleryController::class, 'destroy'])->name('destroy');
        Route::post('/bulk-delete', [GalleryController::class, 'bulkDelete'])->name('bulk-delete');
        Route::patch('/{gallery}/toggle-status', [GalleryController::class, 'toggleStatus'])->name('toggle-status');
    });


    Route::prefix('admin')->name('Inquiry.')->middleware('auth')->group(function () {
            Route::get('Inquiry/index', [InquiryController::class, 'index'])->name('index');
            Route::delete('/Inquiry-delete', [InquiryController::class, 'delete'])->name('delete');
            Route::get('Inquiry/view/{id?}', [InquiryController::class, 'view'])->name('view');
    });

