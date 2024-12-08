<?php

namespace App\Models\Client;

use App\Models\Store\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientStamps extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'client_stamps';
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function shop(): BelongsTo
    {
        return $this->belongsTo(User::class, 'store_id', 'id');
    }
}
