<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("order_products", function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("product_id");
            $table
                ->foreign("order_id")
                ->references("id")
                ->on("order")
                ->onDelete("cascade");
            $table
                ->foreign("product_id")
                ->references("id")
                ->on("products")
                ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("order_products");
    }
};