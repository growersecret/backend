<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\FreehitController;
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


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
     Route::resource('catalogue', CatalogueController::class);
     Route::resource('freehit', FreehitController::class);
     Route::resource('morenutrient', MorenutrientController::class);
    Route::get('/registerlist', [RegisteruserController::class, 'registerList'])->name('registerlist');
    Route::get('/updatedregisterlist', [RegisteruserController::class, 'updatedregisterList'])->name('updatedregisterlist');

});



require __DIR__.'/auth.php';