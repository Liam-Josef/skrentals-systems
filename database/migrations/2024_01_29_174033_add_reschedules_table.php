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
        Schema::create('reschedules', function (Blueprint $table) {
            $table->id();
            $table->integer('is_active')->default('1');
            $table->integer('booking_id')->nullable();
            $table->string('type_name')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('orig_type_id')->nullable();
            $table->integer('duration_id')->nullable();
            $table->integer('orig_duration_id')->nullable();
            $table->integer('hour')->nullable();
            $table->integer('orig_hour')->nullable();
            $table->string('rental_time')->nullable();
            $table->string('activity_date_start')->nullable();
            $table->string('orig_activity_date_start')->nullable();
            $table->string('end_time')->nullable();
            $table->string('activity_date_end')->nullable();
            $table->string('orig_activity_date_end')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('orig_quantity')->nullable();
            $table->integer('cost_per')->nullable();
            $table->integer('orig_cost_per')->nullable();
            $table->integer('additions')->nullable();
            $table->integer('orig_additions')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('orig_fees')->nullable();
            $table->integer('taxes')->nullable();
            $table->integer('orig_taxes')->nullable();
            $table->integer('total_cost')->nullable();
            $table->integer('orig_total_cost')->nullable();
            $table->integer('total_paid')->nullable();
            $table->integer('orig_total_paid')->nullable();
            $table->integer('total_owed')->nullable();
            $table->integer('orig_total_owed')->nullable();
            $table->string('internal_notes')->nullable();
            $table->integer('finalized')->nullable();
            $table->string('ip')->nullable();
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
        Schema::dropIfExists('reschedules');
    }
};
