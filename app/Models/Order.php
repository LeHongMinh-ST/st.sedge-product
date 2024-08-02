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

    public function getStatusTextAttribute()
    {
        return match ($this->status) {
            OrderStatus::Pending => '<span class="badge bg-primary bg-opacity-20 text-primary">Đang chờ duyệt</span>',
            OrderStatus::Approved => '<span class="badge bg-primary bg-opacity-20 text-success">Đã duyệt</span>',
            OrderStatus::Shipping => '<span class="badge bg-warning bg-opacity-20 text-info">Đang giao hàng</span>',
            OrderStatus::Completed => '<span class="badge bg-success bg-opacity-20 text-success">Đã hoàn thành</span>',
            OrderStatus::Canceled => '<span class="badge bg-danger bg-opacity-20 text-danger">Đã hủy</span>',
        };
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot([
            'quantity',
            'price',
            'total',
            'thumbnail',
        ]);
    }
}
