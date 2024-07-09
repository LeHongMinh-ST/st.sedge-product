<?php

declare(strict_types=1);

use App\Enums\OrderStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table): void {
            $table->id();
            $table->string('fullname');
            $table->string('email')->nullable();
            $table->text('address');
            $table->enum('status', array_map(fn ($status) => $status->value, OrderStatus::cases()))->default(OrderStatus::Pending->value);
            $table->string('phone_number');
            $table->text('note')->nullable();
            $table->integer('total');
            $table->datetime('order_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
