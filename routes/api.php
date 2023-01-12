<?php

use App\Http\Controllers\Api\CampaignController;
use App\Http\Controllers\Api\DonationController;
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

Route::controller(DonationController::class)
->prefix('donations')
->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{donation}', 'update');
    Route::delete('/{donation}', 'destroy');
});

Route::get('/campaigns', [CampaignController::class, 'index']);

