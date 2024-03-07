<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cnpj',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(SupplierAddress::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
