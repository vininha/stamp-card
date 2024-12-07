<?php

namespace App\Services;

use App\Repositories\ClientCouponRepository;

class ClientCouponService extends BaseService
{
    public function __construct(ClientCouponRepository $repository, ?array $relations)
    {
        parent::__construct($repository, $relations);
    }
}
