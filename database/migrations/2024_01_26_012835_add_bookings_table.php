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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('paid')->default('0');
            $table->string('first');
            $table->string('last');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('duration_id')->nullable();
            $table->integer('hour')->nullable();
            $table->dateTime('activity_date_start')->nullable();
            $table->dateTime('activity_date_end')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('cost_per')->nullable();
            $table->integer('additions')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('taxes')->nullable();
            $table->integer('total_cost')->nullable();
            $table->integer('total_paid')->nullable();
            $table->integer('total_owed')->nullable();
            $table->integer('bucket_id')->nullable();
            $table->integer('rental_id')->nullable();
            $table->text('customer_notes')->nullable();
            $table->text('internal_notes')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
