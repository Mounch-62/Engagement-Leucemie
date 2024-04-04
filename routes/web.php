<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BureauController;
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

Route::get('/', function () {return view('base.home');});
Route::get('/el-admin', function () {return view('admin.base-admin');});
Route::get('/el-admin/bureau',[BureauController::class, 'index'])->name('admin.bureau');
Route::get('/front', [FrontController::class, 'home'])->name("front.home");
Route::get('/bureau',[FrontController::class,'bureau'])->name("front.bureau");
Route::get('/actualite', [FrontController::class, 'actualite'])->name("front.actualite");
Route::post('/el-admin/bureau/add', [BureauController::class, 'store'])->name('admin.bureau.store');
Route::put('/el-admin/bureau/update/{id}', [BureauController::class, 'update'])->name('admin.bureau.update');
Route::delete('/el-admin/bureau/delete/{id}', [BureauController::class, 'destroy'])->name('admin.bureau.destroy');
