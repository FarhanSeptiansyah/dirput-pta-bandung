<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DirputController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

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

// Show Home
Route::get('/', [HomeController::class, 'index'])->name('index');

// Dirput Show User

Route::get('/dirput-pta-bandung', [UserController::class, 'index'])->name('index');
Route::get('/home', [DirputController::class, 'index'])->name('index');


//Hak akses admin
Route::middleware(['admin'])->group(function () {

    Route::get('/dirput-pta/admin/member', [MemberController::class, 'index'])->name('index');
    Route::get('/dirput-pta/admin/detail/{id_dirput}', [MemberController::class, 'detail'])->name('detail');
    Route::get('/dirput-pta/admin/member/add', [MemberController::class, 'add'])->name('add');
    Route::post('/dirput-pta/admin/member/insert', [MemberController::class, 'insert'])->name('insert');
    Route::get('/dirput-pta/admin/member/edit/{id_dirput}', [MemberController::class, 'edit'])->name('edit');
    Route::post('/dirput-pta/admin/member/update/{id_dirput}', [MemberController::class, 'update'])->name('update');
    Route::get('/dirput-pta/admin/member/delete/{id_dirput}', [MemberController::class, 'delete'])->name('delete');
    Route::get('/dirput-pta/admin/member/ppid', [MemberController::class, 'ppid'])->name('ppid');
});

//Hak akses staf
Route::middleware(['staf'])->group(function () {

    Route::get('/dirput-pta/admin', [DirputController::class, 'admin'])->name('admin');
    Route::get('/dirput-pta/detail/{id_dirput}', [DirputController::class, 'detail'])->name('detail');
    Route::get('/dirput-pta/admin/add', [DirputController::class, 'add'])->name('add');
    Route::post('/dirput-pta/admin/insert', [DirputController::class, 'insert'])->name('insert');
    Route::get('/dirput-pta/admin/edit/{id_dirput}', [DirputController::class, 'edit'])->name('edit');
    Route::post('/dirput-pta/admin/update/{id_dirput}', [DirputController::class, 'update'])->name('update');
    Route::get('/dirput-pta/admin/delete/{id_dirput}', [DirputController::class, 'delete'])->name('delete');
});


Auth::routes();
