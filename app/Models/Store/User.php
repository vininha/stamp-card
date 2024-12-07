<?php

namespace App\Models\Store;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, SoftDeletes;

    protected $table = 'users';
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    protected function name(): Attribute
    {
        return Attribute::make(set: fn(string $value) => strtoupper($value));
    }

    protected function password(): Attribute
    {
        return Attribute::make(set: fn(string $value) => Hash::make($value));
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(StoreTransaction::class, 'store_id', 'id');
    }

    public function rule(): HasOne
    {
        return $this->hasOne(StoreRule::class, 'store_id', 'id');
    }
}
