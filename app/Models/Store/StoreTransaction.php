<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreTransaction extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'store_transactions';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
