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
Route::get('/', [HomeController::class, 'index']);

// Dirput Show User
Route::get('/home', [UserController::class, 'index']);

// Dirput Show Admin
Route::get('/dirput-pta', [UserController::class, 'index']);
Route::get('/dirput-pta/admin', [DirputController::class, 'admin']);
Route::get('/dirput-pta/detail/{id_dirput}', [DirputController::class, 'detail']);
Route::get('/dirput-pta/admin/add', [DirputController::class, 'add']);
Route::post('/dirput-pta/admin/insert', [DirputController::class, 'insert']);
Route::get('/dirput-pta/admin/edit/{id_dirput}', [DirputController::class, 'edit']);
Route::post('/dirput-pta/admin/update/{id_dirput}', [DirputController::class, 'update']);
Route::get('/dirput-pta/admin/delete/{id_dirput}', [DirputController::class, 'delete']);

// Show Member 
Route::get('/dirput-pta/admin/member', [MemberController::class, 'index']);
Route::get('/dirput-pta/admin/detail/{id_dirput}', [MemberController::class, 'detail']);
Route::get('/dirput-pta/admin/member/add', [MemberController::class, 'add']);
Route::post('/dirput-pta/admin/member/insert', [MemberController::class, 'insert']);
Route::get('/dirput-pta/admin/member/edit/{id_dirput}', [MemberController::class, 'edit']);
Route::post('/dirput-pta/admin/member/update/{id_dirput}', [MemberController::class, 'update']);
Route::get('/dirput-pta/admin/member/delete/{id_dirput}', [MemberController::class, 'delete']);

Route::get('/dirput-pta/admin/member/ppid', [MemberController::class, 'ppid']);

Auth::routes();
