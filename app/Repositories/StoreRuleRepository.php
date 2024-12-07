<?php

namespace App\Repositories;

use App\Models\Store\StoreRule;

class StoreRuleRepository extends BaseRepository
{
    public function __construct(StoreRule $model)
    {
        parent::__construct($model);
    }
}
