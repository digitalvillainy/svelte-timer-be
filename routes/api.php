<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todos', fn(Request $request): JsonResponse => (new TodoController)->index($request));

Route::post('/todos', fn(Request $request): JsonResponse => (new TodoController)->store($request));

Route::put('/todos/{id}', fn(Request $request): JsonResponse => (new TodoController)->update($request));

Route::delete('/todos/{id}', fn(Request $request): JsonResponse => (new TodoController)->destroy($request));
