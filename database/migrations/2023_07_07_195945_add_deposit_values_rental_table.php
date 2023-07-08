<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rentals', function (Blueprint $table) {
            $table->string('second_toy_fee');
            $table->string('second_toy_fee_type');
            $table->string('second_fuel_deposit');
            $table->string('second_fuel_deposit_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rentals', function (Blueprint $table) {
            $table->string('second_toy_fee')->nullable();
            $table->string('second_toy_fee_type')->nullable();
            $table->string('second_fuel_deposit')->nullable();
            $table->string('second_fuel_deposit_type')->nullable();
        });
    }
};
