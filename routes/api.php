<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/quiz', [QuizController::class, 'getQuiz']);

Route::post('/quiz/answer', [QuizController::class, 'checkAnswer']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

