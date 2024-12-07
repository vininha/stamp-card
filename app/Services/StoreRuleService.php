<?php

namespace App\Services;

use App\Repositories\StoreRuleRepository;

class StoreRuleService extends BaseService
{
    public function __construct(StoreRuleRepository $repository, ?array $relations)
    {
        parent::__construct($repository, $relations);
    }
}
