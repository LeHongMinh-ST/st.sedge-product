<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'fullname',
        'email',
        'address',
        'note',
        'total',
        'status',
        'order_date',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot([
            'quantity',
            'price',
            'total',
        ]);
    }
}
