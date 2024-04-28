<?php

use App\Http\Controllers\Api\ApiController;
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
Route::post('/verify-profile', [ApiController::class, 'verifyProfile']);
Route::post('/join-meeting', [ApiController::class, 'joinMeeting']);
Route::get("/send-notifications", [ApiController::class, 'sendNotifications']);
Route::post('/clear-invitation', [ApiController::class, 'clearInvitation']);
Route::post('/invitation-action', [ApiController::class, 'invitationAction']);
