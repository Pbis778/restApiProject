<?php

namespace App\Http\Controllers\People;

use App\Http\Requests\StorePeopleRequest;
use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function create(StorePeopleRequest $request): JsonResponse
    {
        $people = People::create($request->all());

        return response()->json($people, 201);
    }

    public function read(People $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function update(Request $request, People $people): JsonResponse
    {
        $people->update($request->all());

        return response()->json($people, 200);
    }

    public function delete(People $people): JsonResponse
    {
        $people->delete();

        return response()->json(null, 204);
    }
}
