<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientCoupon extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'client_coupons';

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
