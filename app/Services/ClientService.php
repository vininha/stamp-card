<?php

namespace App\Services;

use App\Repositories\ClientRepository;

class ClientService extends BaseService
{
    public function __construct(ClientRepository $repository, ?array $relations)
    {
        parent::__construct($repository, $relations);
    }
}
