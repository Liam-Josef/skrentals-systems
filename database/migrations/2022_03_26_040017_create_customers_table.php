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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address_1');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table -> string('phone');
            $table -> string('email');
            $table->string('driver_license_state');
            $table->string('driver_license_number');
            $table->string('birth_date');
            $table->string('how_heard')->nullable();
            $table->string('license_front');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
