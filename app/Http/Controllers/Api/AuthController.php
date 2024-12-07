<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(protected AuthService $service)
    {
    }

    public function login(AuthRequest $request): JsonResponse
    {
        return $this->service->login($request->validated());
    }

    public function logout(int $id): JsonResponse
    {
        return $this->service->logout($id);
    }
}
