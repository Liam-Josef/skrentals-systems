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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default('0');
            $table->boolean('allow_multiday')->default('1');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('capacity_count')->nullable();
            $table->string('weight_capacity')->nullable();
            $table->text('cancel_policy')->nullable();
            $table->text('pickup_details')->nullable();
            $table->string('pickup_address')->nullable();
            $table->text('what_to_know')->nullable();
            $table->text('what_to_bring')->nullable();
            $table->text('suggested_attire')->nullable();
            $table->integer('booking_buffer_hr')->default('0');
            $table->boolean('archive')->default('0');
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
        Schema::dropIfExists('types');
    }
};
