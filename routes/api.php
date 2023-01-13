<?php

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\MorenutrientController;
use App\Http\Controllers\RegisteruserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/new', [RegisteruserController::class, 'registerStore']);
Route::post('/user/verify', [RegisteruserController::class, 'registerVerify']);
Route::post('/user/resendotp', [RegisteruserController::class, 'resendOtp']);
Route::get('/userdetail/{email}', [RegisteruserController::class, 'userdetail']);
Route::get('/reducehit/{email}', [RegisteruserController::class, 'reducehit']);
Route::get('/allCatalogue', [CatalogueController::class, 'allCatalogueApi']);
Route::get('/otherNutrients', [MorenutrientController::class, 'otherNutrients']);
Route::patch('/updateUser/{email}', [RegisteruserController::class, 'updateRegisterUser']);
