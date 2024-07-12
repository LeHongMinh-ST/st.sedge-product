<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'phone_number',
        'fullname',
        'email',
        'address',
        'note',
        'total',
        'status',
        'order_date',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => OrderStatus::class,
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
