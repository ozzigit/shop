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
        Schema::create("reviews", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("product_id")->nullable();
            $table->unsignedSmallInteger("rating");
            $table->tinyInteger("is_published")->default(0);
            $table->tinyInteger("is_visible");
            $table->timestamps();
            $table
                ->foreign("product_id")
                ->references("id")
                ->on("products")
                ->onDelete("cascade");
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("reviews");
    }
};
