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
        Schema::create("favorite_users", function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("favorite_id");
            $table->unsignedBigInteger("user_id");
            $table
                ->foreign("favorite_id")
                ->references("id")
                ->on("favorites")
                ->onDelete("cascade");
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("favorite_users");
    }
};
