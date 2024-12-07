<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\StoreService;
use Illuminate\Http\JsonResponse;

class StoreController extends Controller
{
    public function __construct(protected StoreService $service)
    {
    }

    public function show(int $id): JsonResponse
    {
        return response()->json(['user' => $this->service->findById($id)]);
    }
}
