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
        Schema::table("categories_products", function (Blueprint $table) {
            $table->float("price")->default(0);
            $table->unsignedSmallInteger("quantity")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("categories_products", function (Blueprint $table) {
            $table->dropColumn("price");
            $table->dropColumn("quantity");
        });
    }
};
