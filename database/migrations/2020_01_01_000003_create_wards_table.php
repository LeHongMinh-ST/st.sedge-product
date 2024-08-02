<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('wards', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('gso_id');
            $table->unsignedBigInteger('district_id');
            $table->timestamps();

            $table->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('wards');
    }
}
