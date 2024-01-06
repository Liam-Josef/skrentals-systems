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
        Schema::create('availabils', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default('1');
            $table->boolean('repeat_day')->default('1');
            $table->boolean('repeat_week')->default('0');
            $table->integer('start_min_increm')->default('15');
            $table->integer('start_hour')->nullable();
            $table->integer('start_min')->nullable();
            $table->string('start_ending')->nullable();
            $table->integer('end_hour')->nullable();
            $table->integer('end_min')->nullable();
            $table->string('end_ending')->nullable();
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
        Schema::dropIfExists('availabils');
    }
};
