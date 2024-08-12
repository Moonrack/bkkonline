<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home.index');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//ADMIN CONTROLLER//
route::get('view_loker', [AdminController::class, 'view_loker'])->middleware(['auth', 'admin']);
route::get('tambah_loker', [AdminController::class, 'tambah_loker'])->middleware(['auth', 'admin']);
route::post('upload_loker', [AdminController::class, 'upload_loker'])->middleware(['auth', 'admin']);
route::post('update_job/{id}', [AdminController::class, 'update_job'])->middleware(['auth', 'admin']);
route::get('delete_job/{id}', [AdminController::class, 'delete_job'])->middleware(['auth', 'admin']);
route::get('edit_job/{id}', [AdminController::class, 'edit_job'])->middleware(['auth', 'admin']);
route::get('pelamar', [AdminController::class, 'pelamar'])->middleware(['auth', 'admin']);
//HOME CONTROLLER//
route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
route::get('/', [HomeController::class, 'home']);
route::get('/dashboard', [HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');;
route::get('job_details/{id}', [HomeController::class, 'job_details']);
route::get('update_profile', [HomeController::class, 'update_profile']);
route::post('update', [HomeController::class, 'update']);
route::post('add_job/{id}', [HomeController::class, 'add_job'])->middleware(['auth', 'verified']);


