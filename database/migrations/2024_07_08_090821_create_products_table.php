<?php

declare(strict_types=1);

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table): void {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->unique();
            $table->string('originalPrice');
            $table->string('discountePrice');
            $table->string('thumbnail')->unique();
            $table->integer('quantity')->unique();
            $table->enum('status', array_map(fn ($status) => $status->value, Status::cases()))->default(Status::InStock->value);
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
