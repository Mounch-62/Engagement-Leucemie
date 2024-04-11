<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\ActualiteController;






Route::get('/', function () {
    return view('base.home');
});
Route::get('/el-admin', function () {
    return view('admin.base-admin');
});
Route::get('/el-admin/bureau', [BureauController::class, 'index'])->name('admin.bureau');
Route::delete('/el-admin/bureau/delete/{id}', [BureauController::class, 'destroy'])->name('admin.bureau.destroy');
Route::resource('/el-admin/actualite', ActualiteController::class);
Route::post('/el-admin/bureau/add', [BureauController::class, 'store'])->name('admin.bureau.store');
Route::put('/el-admin/bureau/update/{id}', [BureauController::class, 'update'])->name('admin.bureau.update');

Route::get('/front', [FrontController::class, 'home'])->name("front.home");
route::get('/bureau',[FrontController::class, 'bureau'])->name("front.bureau.bureau");
Route::get('/actualite', [FrontController::class, 'actualite'])->name("front.actualite");
Route::get('/front/bandeauInscrit',[FrontController::class,'test'])->name('front.bandeau-inscrit');


Route::resource('/el-admin/actualite', ActualiteController::class);
Route::get('/el-admin/actualite', [ActualiteController::class,'index'])->name('admin.actualite.index');
Route::get('/ajouterActu', [ActualiteController::class, 'create'])->name("ajouter_actu");

Route::post('/traiter_form', [ActualiteController::class, 'store'])->name("enreg_actu");
Route::delete('/delete/{id}', [ActualiteController::class, 'destroy'])->name('delete_actualite')->where('id', '[0-9]+');

