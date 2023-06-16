<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VoteApiController;
use App\Http\Controllers\Api\CandidateApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('v1/vote-create',[VoteApiController::class, 'create']);
Route::get('v1/vote-result',[VoteApiController::class, 'result']);
Route::post('v1/candidate-store', [CandidateApiController::class, 'create'])->name('candidate.store');


