<?php

namespace App\Services;

use App\Repositories\StoreRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function __construct(protected StoreRepository $repository)
    {
    }

    public function login(array $data): JsonResponse
    {
        $user = $this->repository->findByEmail($data['email']);
        if (!$user or !Hash::check($data['password'], $user->password)) {
            abort(401, 'Credenciais inválidas.');
        }
        $user->tokens->where('name', $_SERVER['HTTP_USER_AGENT'])
            ->each(fn($token) => $token->delete());
        return response()->json([
            'user' => $user,
            'rule' => $user->rule,
            'token' => $user->createToken($_SERVER['HTTP_USER_AGENT'])->plainTextToken,
        ]);
    }

    public function logout(int $id): JsonResponse
    {
        try {
            $user = $this->repository->findById($id);
            if (auth()->user()->id !== $user->id) {
                auth()->user()->currentAccessToken()->delete();
                return response()->json(['message' => 'Usuario deslogado.']);
            }
            return response()->json(['error' => 'Usuario nao encontrado.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
