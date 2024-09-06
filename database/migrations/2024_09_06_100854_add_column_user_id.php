<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('products', 'user_id')) {
            Schema::table('products', function (Blueprint $table): void {
                $table->integer('user_id')->nullable();
            });
        }

        if (!Schema::hasColumn('categories', 'user_id')) {
            Schema::table('categories', function (Blueprint $table): void {
                $table->integer('user_id')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table): void {
            $table->dropColumn('user_id');
        });

        Schema::table('categories', function (Blueprint $table): void {
            $table->dropColumn('user_id');
        });
    }
};
