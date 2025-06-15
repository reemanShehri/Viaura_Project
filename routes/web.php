<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourcesAdmin;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Category2Controller;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CourseChatController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\Admin\Course1Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ViauraEducationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/profileP', [ProfileController::class, 'editP'])->name('profile.editP');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profilePhoto', [ProfileController::class, 'photo'])->name('profile.photo');
    Route::get('/dashboard', [CourcesController::class, 'index'])->name('dashboard');

   Route::post('/profile/image-upload', [ProfileController::class, 'uploadProfileImage'])->name('profile.image.upload');
    //

    Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileUserController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileUserController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/photo', [ProfileUserController::class, 'updatePhoto'])->name('profile.photo.update');
});


Route::get('/category/{id}', [Category2Controller::class, 'show'])->name('category.show');

    Route::get('/profileShow', [ProfileUserController::class, 'show'])->name('profile.show');
    Route::get('/job', [ProfileController::class, 'job'])->name('job');

// ب ال اي دي اصح رح تكون حسب ال كورس category اللي ضغطت عليه
    Route::get('/Cources', [CourcesController::class, 'cources'])->name('cources');


    //
Route::get('/vaiura', [ViauraEducationController::class, 'vaiura'])->name('viaura.viaura');

Route::get('/education', [ViauraEducationController::class, 'index'])->name('viaura.education');
Route::post('/contact-data', [ViauraEducationController::class, 'storeContact'])->name('contact_data');
Route::get('/footer', [ViauraEducationController::class, 'footer'])->name('viaura.footer');





   Route::get('/courses/{course}/chat', [CourseChatController::class, 'show'])->name('courses.chat.show');
    Route::post('/courses/{course}/chat', [CourseChatController::class, 'send']);
    Route::delete('/courses/{course}/chat/{message}', [CourseChatController::class, 'destroy'])->name('courses.chat.destroy');


});







Route::middleware(['auth', IsAdmin::class])
->prefix('admin')
->name('admin.')
->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin');

     Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
     Route::resource('courses', CourcesAdmin::class);
     Route::resource('users', UserController::class);
     Route::resource('categories', CategoryController::class);
     Route::resource('jobs', JobController::class);
    });



    // traceee
Route::middleware('auth', IsAdmin::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/admins', [AdminController::class, 'showAdmins'])->name('admins.index');
    Route::delete('/admins/{user}', [AdminController::class, 'destroyAdmin'])->name('admins.destroy');
    Route::put('/admins/{user}/demote', [AdminController::class, 'demoteAdmin'])->name('admins.demote');
    Route::get('/admins/create', [AdminController::class, 'createAdmin'])->name('admins.create');
    Route::post('/admins', [AdminController::class, 'storeAdmin'])->name('admins.store');

    Route::get('/admins/{user}/edit', [AdminController::class, 'editAdmin'])->name('admins.edit');
    Route::put('/admins/{user}', [AdminController::class, 'updateAdmin'])->name('admins.update');
});





require __DIR__.'/auth.php';
