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
        Schema::create("transactions", function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders');
            $table->unsignedBigInteger("user_id");
            $table->string("code", 100);
            $table->tinyInteger("type")->default(0);
            $table->tinyInteger("mode")->default(0);
            $table->tinyInteger("status")->default(0);
            $table->timestamps();
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("transactions");
    }
};
