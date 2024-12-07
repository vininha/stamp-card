<?php

namespace App\Services;

use App\Repositories\StoreTransactionRepository;

class StoreTransactionService extends BaseService
{
    public function __construct(StoreTransactionRepository $repository, ?array $relations)
    {
        parent::__construct($repository, $relations);
    }
}
