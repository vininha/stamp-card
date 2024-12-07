<?php

namespace App\Repositories;

use App\Models\Store\StoreTransaction;

class StoreTransactionRepository extends BaseRepository
{
    public function __construct(StoreTransaction $model)
    {
        parent::__construct($model);
    }
}
