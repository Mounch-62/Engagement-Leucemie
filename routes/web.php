<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\LienController;
use App\Http\Controllers\MediathequeController;

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


Route::get('/el-admin/partenaire/{id}', [PartenaireController::class, 'partenaire'])->where("id", "[0-9]+")->name('admin.showPartenaire');
Route::post('/el-admin/addPartenaire',[PartenaireController::class, 'create'])->name('admin.addPartenaire');
Route::get('/el-admin/partenaire',[PartenaireController::class, 'index'])->name('admin.partenaire');
Route::post('/el-admin/editPartenaire/{id}',[PartenaireController::class,'editDescriptionPartenaire'])->where('id',"[0-9]+")->name('admin.editPartenaire');
Route::get('/el-admin/deletePartenaire/{id}', [PartenaireController::class, 'deletePartenaire'])->where("id", "[0-9]+")->name('admin.deletePartenaire');
Route::delete('/el-admin/deleteLink/{idLink}/{linkPartenaire}', [LienController::class, 'delete'])->where("idLink", "[0-9]+")->name('admin.deleteLink');
Route::post('/el-admin/editLink/{idLink}/{idPartenaire}', [LienController::class, 'editLink'])->where("idLink", "[0-9]+")->where("idPartenaire", "[0-9]+")->name('admin.editLink');
Route::get('/el-admin/addLink/{id}', [PartenaireController::class, 'addLink'])->where("id", "[0-9]+")->name('admin.addLink');
Route::delete('/el-admin/deletePartenaire/{id}', [PartenaireController::class, 'delete'])->where("id", "[0-9]+")->name('admin.deletePartener');
Route::post('el-admin/editNamePartenaire/{id}', [PartenaireController::class, 'editNamePartenaire'])->where("id", "[0-9]+")->name('admin.modifNomPartenaire');
Route::get('/partenaire', [PartenaireController::class, 'viewIndex'])->name('front.partenaire');
Route::post('/el-admin/image', [MediathequeController::class, 'saveImage'])->name('admin.saveImage');
