<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\VoteController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('users', [AuthController::class, 'index']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    // Candidate routes
    Route::get('candidates', [CandidateController::class, 'index']);
    Route::post('candidates', [CandidateController::class, 'store']);
    Route::get('candidates/{id}', [CandidateController::class, 'show']);
    Route::put('candidates/{id}', [CandidateController::class, 'update']);
    Route::delete('candidates/{id}', [CandidateController::class, 'destroy']);

    // Vote routes
    Route::get('votes', [VoteController::class, 'index']);
    Route::post('votes', [VoteController::class, 'store']);
    Route::get('votes/{id}', [VoteController::class, 'show']);
    Route::put('votes/{id}', [VoteController::class, 'update']);
    Route::delete('votes/{id}', [VoteController::class, 'destroy']);

    // Election routes
    Route::get('elections', [ElectionController::class, 'index']);
    Route::post('elections', [ElectionController::class, 'store']);
    Route::get('elections/{id}', [ElectionController::class, 'show']);
    Route::put('elections/{id}', [ElectionController::class, 'update']);
    Route::delete('elections/{id}', [ElectionController::class, 'destroy']);
});

