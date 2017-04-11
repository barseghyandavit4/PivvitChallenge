<?php

use Illuminate\Http\Request;
use App\Purchase;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('/purchase/create', [
    'as' => 'purchaseCreate',
    'uses' => 'PurchaseController@store'
])->middleware('auth:api');
