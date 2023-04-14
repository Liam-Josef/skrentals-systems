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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('internal_vehicle_id');
            $table->string('vehicle_type');
            $table->string('status')->nullable();
            $table->string('location');
            $table->string('year');
            $table->string('model');
            $table->string('vin');
            $table->string('or_number')->nullable();
            $table->string('current_hours')->nullable();
            $table->string('expected_hours')->nullable();
            $table->string('remaining_hours')->nullable();
            $table->string('previous_hours')->nullable();
            $table->string('hours_updated')->nullable();
            $table->string('last_serviced')->nullable();
            $table->boolean('is_active')->nullable();
            $table->boolean('launched');
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
        Schema::dropIfExists('vehicles');
    }
};
