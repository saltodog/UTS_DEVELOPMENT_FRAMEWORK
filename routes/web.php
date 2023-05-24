<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'index']);
Route::get('user/tambah', [UserController::class, 'tambah']);
Route::post('user/tambah', [UserController::class, 'tambahAksi']);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::patch('user/edit/{id}', [UserController::class, 'editAksi']);
Route::get('user/delete/{id}', [UserController::class, 'delete']);

Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/tambah', [KategoriController::class, 'tambah']);
Route::post('kategori/tambah', [KategoriController::class, 'tambahAksi']);
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::patch('kategori/edit/{id}', [KategoriController::class, 'editAksi']);
Route::get('kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('buku', [BukuController::class, 'index']);
Route::get('buku/tambah', [BukuController::class, 'tambah']);
Route::post('buku/tambah', [BukuController::class, 'tambahAksi']);
Route::get('buku/edit/{id}', [BukuController::class, 'edit']);
Route::patch('buku/edit/{id}', [BukuController::class, 'editAksi']);
Route::get('buku/delete/{id}', [BukuController::class, 'delete']);



