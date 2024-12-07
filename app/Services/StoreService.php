<?php

namespace App\Services;

use App\Repositories\StoreRepository;

class StoreService extends BaseService
{
    public function __construct(StoreRepository $repository, ?array $relations)
    {
        parent::__construct($repository, ['']);
    }
}
