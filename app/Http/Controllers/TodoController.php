<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $todos = Todo::all();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $todos = Todo::insert($request->all());
        return response()->json($todos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): JsonResponse
    {
        $todos = Todo::find($request->id);
        $todos->update([
            'id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
        ]);
        return response()->json($todos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): JsonResponse
    {
        $results = Todo::where('id', $request->id)->delete();
        return response()->json($results);
    }
}
