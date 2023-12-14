<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin', [AdminController::class, 'home'])->name('admin.data');

//profile
Route::get('/profil-index', [ProfileController::class, 'index'])->name('profile.data');






//USER ROUTE
//index
Route::get('/user', [UserController::class, 'index'])->name('user.data');


//Tentang Kami
Route::get('/tentang-kami', [UserController::class, 'Tentang'])->name('profile.data');
