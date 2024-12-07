<?php

namespace App\Services;

use App\Repositories\ClientRepository;
use Illuminate\Http\JsonResponse;

class ClientService extends BaseService
{
    public function __construct(ClientRepository $repository, ?array $relations)
    {
        parent::__construct($repository, $relations);
    }

    public function updateOrCreate(array $data): JsonResponse
    {
        return response()->json(['mobile' => $this->repository->updateOrCreate($data['mobile'])]);
    }
}
