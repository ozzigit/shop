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
        Schema::table("users", function (Blueprint $table) {
            $table->string("first_name")->nullable()->after('name');
            $table->string("middle_name")->nullable()->after('name');
            $table->string("last_name")->nullable()->after('name');
            $table->string("mobile")->nullable()->after('name');
            $table->string("adress")->nullable()->after('name');
            $table->tinyInteger("is_blocked")->default(0)->after('password');
            $table->dateTime("last_login")->nullable()->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("users", function (Blueprint $table) {
            $table->dropColumn("first_name");
            $table->dropColumn("middle_name");
            $table->dropColumn("last_name");
            $table->dropColumn("mobile");
            $table->dropColumn("adress");
            $table->dropColumn("is_blocked");
            $table->dropColumn("last_login");
        });
    }
};
