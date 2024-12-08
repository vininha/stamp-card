<?php

namespace App\Services;

use App\Repositories\ClientRepository;
use Illuminate\Http\JsonResponse;

class ClientService extends BaseService
{
    public function __construct(ClientRepository $repository)
    {
        parent::__construct($repository, ['stamps', 'coupons']);
    }

    public function updateOrCreate(array $data)
    {
        $client = $this->repository->updateOrCreate($data['mobile']);
        $client->refresh();
        return $client;
    }
    public function listStamps(int $id)
    {
        $client = $this->repository->findById($id, ['stamps', 'stamps.shop']);
        $client->refresh();
        return $client;
    }
}
