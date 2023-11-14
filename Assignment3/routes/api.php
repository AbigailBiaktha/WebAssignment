<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/task', [TaskController::class, 'get_tasks']);
Route::post('/task/create', [TaskController::class, 'create_task']);
Route::put('/task/{task}/update', [TaskController::class, 'update_task']);
Route::delete('/task/{task}/delete', [TaskController::class, 'delete_task']);

