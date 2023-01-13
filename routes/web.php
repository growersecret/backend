<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\FreehitController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MorenutrientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteruserController;
use App\Models\Registeruser;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/dashboard',[FrontController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
     Route::resource('catalogue', CatalogueController::class);
     Route::get('catalogue/active/{id}', [CatalogueController::class, 'activeCatalogue'])->name('activeCatalogue');
     Route::get('catalogue/notactive/{id}', [CatalogueController::class, 'notactiveCatalogue'])->name('notactiveCatalogue');
     Route::resource('catalogue', CatalogueController::class);
     Route::resource('freehit', FreehitController::class);
     Route::resource('morenutrient', MorenutrientController::class);
    Route::get('/registerlist', [RegisteruserController::class, 'registerList'])->name('registerlist');
    Route::get('/updatedregisterlist', [RegisteruserController::class, 'updatedregisterList'])->name('updatedregisterlist');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';