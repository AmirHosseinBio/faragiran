<?php

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

Route::post('lesson/store', [App\Http\Controllers\Api\LessonController::class, 'store'])->name('lesson.store');

Route::put('course/update/{course}', [App\Http\Controllers\Api\CourseController::class, 'update'])->name('course.update');
