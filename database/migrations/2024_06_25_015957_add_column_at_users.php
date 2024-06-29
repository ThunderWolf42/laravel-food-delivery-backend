<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //phone
            $table->String('phone')->nullable();

            //address
            $table->String('address')->nullable();

            //roles
            $table->String('roles')->default('user');

            //license_plate
            $table->String('license_plate')->nullable();

            //restaurant_name
            $table->String('restaurant_name')->nullable();

            //restaurant_address
            $table->String('restaurant_address')->nullable();

            //photo
            $table->String('photo')->nullable();

            //latlong
            $table->String('latlong')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('roles');
            $table->dropColumn('license_plate');
            $table->dropColumn('restaurant_name');
            $table->dropColumn('restaurant_address');
            $table->dropColumn('photo');
            $table->dropColumn('latlong');
        });
    }
};
