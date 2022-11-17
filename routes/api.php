<?php

use App\Http\Controllers\Api\MobileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//Protected Routes
Route::group(['middleware' => ('auth:sanctum')], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::resource('contacts', MobileController::class);
    Route::get('contacts/search/{str}', [MobileController::class, 'search']);
});


//Auth Route
Route::post('/mobile/login', [MobileController::class, 'auth']);
