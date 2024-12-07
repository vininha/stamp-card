<?php

namespace App\Services;

use App\Repositories\ClientStampRepository;

class ClientStampService extends BaseService
{
    public function __construct(ClientStampRepository $repository, ?array $relations)
    {
        parent::__construct($repository, ['client']);
    }
}
