<?php

use App\Http\Controllers\CatalogueController;
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

Route::post('/register-user', [RegisteruserController::class, 'registerStore']);
Route::post('/register-user/verify', [RegisteruserController::class, 'registerVerify']);
Route::post('/resendotp', [RegisteruserController::class, 'resendOtp']);
Route::get('/userdetail/{email}', [RegisteruserController::class, 'userdetail']);
Route::get('/reducehit/{email}', [RegisteruserController::class, 'reducehit']);
Route::get('/catalogues', [CatalogueController::class, 'allCatalogueApi']);
Route::patch('/updateRegisterUser/{email}', [RegisteruserController::class, 'updateRegisterUser']);
