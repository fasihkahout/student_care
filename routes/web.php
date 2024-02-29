<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotionSheetController;
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
   return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/users' , [UserController::class , 'users'])->name('users');
Route::get('/addusers', [UserController::class, 'addusers'])->name('addusers');
Route::post('/postusers', [UserController::class, 'postusers'])->name('postusers');
Route::get('/editusers/{id}', [UserController::class, 'editusers'])->name('editusers');
Route::post('/updateusers/{id}', [UserController::class, 'updateusers'])->name('updateusers');
Route::get('/deleteusers/{id}', [UserController::class, 'deleteusers'])->name('deleteusers');
Route::get('/sheets' , [NotionSheetController::class , 'sheet'])->name('sheets');