<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'birth_date',
        'cpf',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    protected $casts = [
        'birth_date' => 'datetime:Y-m-d',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(CustomerAddress::class);
    }
}
