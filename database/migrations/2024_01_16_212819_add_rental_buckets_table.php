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
        Schema::create('buckets', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->string('type_name');
            $table->integer('duration_id');
            $table->string('duration_name');
            $table->integer('hour')->nullable();
            $table->integer('avail_id')->nullable();
            $table->date('rental_date');
            $table->time('rental_time');
            $table->time('end_time')->nullable();
            $table->boolean('reserved')->default('0');
            $table->dateTime('activity_date_start')->nullable();
            $table->dateTime('activity_date_end')->nullable();
            $table->string('customer_last')->nullable();
            $table->string('customer_first')->nullable();
            $table->string('customer_ip')->nullable();
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
        Schema::dropIfExists('buckets');
    }
};
