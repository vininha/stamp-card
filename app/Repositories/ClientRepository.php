<?php

namespace App\Repositories;

use App\Models\Client\Client;

class ClientRepository extends BaseRepository
{
    public function __construct(Client $model)
    {
        parent::__construct($model);
    }
}
