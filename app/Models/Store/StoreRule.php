<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreRule extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'store_rules';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'store_id', 'id');
    }
}
