<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Services\ClientService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(protected ClientService $service)
    {
    }

    public function store(ClientRequest $request): JsonResponse
    {
        return response()->json(['client' => $this->service->updateOrCreate($request->validated())]);
    }
    public function listStamps(int $id): JsonResponse
    {
        return response()->json(['client' => $this->service->listStamps($id)]);
    }
}
