<?php

namespace App\Repositories;

use App\Models\Client\ClientCoupon;

class ClientCouponRepository extends BaseRepository
{
    public function __construct(ClientCoupon $model)
    {
        parent::__construct($model);
    }
}
