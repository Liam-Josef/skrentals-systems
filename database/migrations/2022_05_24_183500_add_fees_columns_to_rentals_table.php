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
            $table->integer('security_deposit')->nullable();
            $table->string('security_deposit_type')->nullable();
            $table->integer('fuel_deposit')->nullable();
            $table->string('fuel_deposit_type')->nullable();
            $table->string('toy_fee_type')->nullable();
            $table->string('trailer_fee_type')->nullable();
            $table->string('sar_fee_type')->nullable();
            $table->string('cleaning_fee_type')->nullable();
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
            $table->integer('security_deposit');
            $table->string('security_deposit_type');
            $table->integer('fuel_deposit');
            $table->string('fuel_deposit_type');
            $table->string('toy_fee_type');
            $table->string('trailer_fee_type');
            $table->string('sar_fee_type');
            $table->string('cleaning_fee_type');
        });
    }
};
