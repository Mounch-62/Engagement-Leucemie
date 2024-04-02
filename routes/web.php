<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ActualiteController;
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
Route::get('/actualite', [FrontController::class, 'actualite'])->name("front.actualite");
Route::post('/el-admin/bureau/add', [BureauController::class, 'store'])->name('admin.bureau.store');
Route::put('/el-admin/bureau/update/{id}', [BureauController::class, 'update'])->name('admin.bureau.update');
Route::delete('/el-admin/bureau/delete/{id}', [BureauController::class, 'destroy'])->name('admin.bureau.destroy');

Route::get('/', function () {
    return view('base.home');
});
Route::get('/el-admin', function () {
    return view('admin.base-admin');
});
Route::get('/el-admin/bureau', [BureauController::class, 'index'])->name('admin.bureau');
Route::resource('/el-admin/actualite', ActualiteController::class);
Route::get('/front', [FrontController::class, 'home'])->name("front.home");
Route::get('/actualite', [FrontController::class, 'actualite'])->name("front.actualite");
Route::get('/ajouterActu', [ActualiteController::class, 'create'])->name("ajouter_actu");
Route::post('/traiter_form', [ActualiteController::class, 'store'])->name("enreg_actu");
Route::delete('/delete/{id}', [ActualiteController::class, 'destroy'])->name('delete_actualite')->where('id', '[0-9]+');

Route::get('/carousel', [MediaController::class, 'image'])->name("front.carousel");



Route::get('/videos', [MediaController::class, 'video'])->name('front.video');
Route::get('/front/bandeauInscrit',[FrontController::class,'test'])->name('front.bandeau-inscrit');
Route::get('/el-admin/actualite', [MediaController::class,'backActualite'])->name('admin.actualite.index');