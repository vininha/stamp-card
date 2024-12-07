<?php

namespace App\Services;

use App\Repositories\ClientCouponRepository;

class ClientCouponService extends BaseService
{
    public function __construct(ClientCouponRepository $repository)
    {
        parent::__construct($repository, ['client']);
    }
}
