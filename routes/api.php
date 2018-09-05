<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('users', 'UserController');
//Route::resource('services', 'ServiceController');
//Route::resource('specialities', 'SpecialityController');

Route::apiResource('users', 'API\UserController');
Route::apiResource('doctors', 'API\DoctorController');
Route::apiResource('patients', 'API\PatientController');
Route::apiResource('services', 'API\ServiceController');
Route::apiResource('specialities', 'API\SpecialityController');
Route::apiResource('certificates', 'API\CertificateController');
Route::apiResource('qualifications', 'API\QualificationController');
//ApiRoute::resource('users', 'App\Http\Controllers\API\UserController');
//ApiRoute::resource('services', 'App\Http\Controllers\API\ServiceController');
//ApiRoute::resource('specialities', 'App\Http\Controllers\API\SpecialityController');
