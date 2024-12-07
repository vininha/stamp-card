<?php

namespace App\Services;

use App\Repositories\StoreRuleRepository;

class StoreRuleService extends BaseService
{
    public function __construct(StoreRuleRepository $repository)
    {
        parent::__construct($repository, ['user']);
    }
}
