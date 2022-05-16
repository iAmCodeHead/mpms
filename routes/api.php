<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PracticeController;
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

//Route::post('/login', [AuthController::class, 'login']);

//Protected Routes
//Route::group(['middleware' => ['auth:api']], function(){

    Route::get('/employees', [EmployeeController::class, 'index']);

    Route::get('/employees/{id}', [EmployeeController::class, 'show']);

    Route::post('/employees', [EmployeeController::class, 'store']);

    Route::get('/practices', [PracticeController::class, 'index']);

    Route::post('/practices', [PracticeController::class, 'store']);

//    Route::post('/logout', [AuthController::class, 'logout']);
//});

Route::fallback(function(){
    return response()->json(['status' => false, 'message' => 'This Route does not exist. Be sure you are calling the right method with no typo'], 404);
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
