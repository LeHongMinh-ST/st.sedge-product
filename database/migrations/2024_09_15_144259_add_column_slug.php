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
        if (!Schema::hasColumn('categories', 'slug')) {
            Schema::table('categories', function (Blueprint $table): void {
                $table->string('slug')->nullable();
            });
        }

        if (!Schema::hasColumn('products', 'slug')) {
            Schema::table('products', function (Blueprint $table): void {
                $table->string('slug')->nullable();
            });
        }

        if (!Schema::hasColumn('posts', 'slug')) {
            Schema::table('posts', function (Blueprint $table): void {
                $table->string('slug')->nullable();
            });
        }

        if (!Schema::hasColumn('orders', 'slug')) {
            Schema::table('orders', function (Blueprint $table): void {
                $table->string('slug')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table): void {
            $table->dropColumn('slug');
        });

        Schema::table('products', function (Blueprint $table): void {
            $table->dropColumn('slug');
        });

        Schema::table('posts', function (Blueprint $table): void {
            $table->dropColumn('slug');
        });

        Schema::table('orders', function (Blueprint $table): void {
            $table->dropColumn('slug');
        });
    }
};
