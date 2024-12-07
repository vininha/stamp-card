<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'clients';

    public function coupons(): HasMany
    {
        return $this->hasMany(ClientCoupon::class);
    }
    public function stamps(): HasMany
    {
        return $this->hasMany(ClientStamps::class);
    }
}
