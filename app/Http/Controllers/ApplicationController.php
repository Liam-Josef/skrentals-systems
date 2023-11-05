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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->nullable();
            $table->string('vehicle_id');
            $table->string('vehicle_type');
            $table->string('internal_vehicle_id');
            $table->string('rental_invoice')->nullable();
            $table->string('status');
            $table->text('description')->nullable();
            $table->string('service_type')->nullable();
            $table->string('invoice')->nullable();
            $table->string('image')->nullable();
            $table->string('service_invoice')->nullable();
            $table->string('date_submitted')->nullable();
            $table->string('submitted_by')->nullable();
            $table->string('date_invoiced')->nullable();
            $table->string('invoiced_by')->nullable();
            $table->string('date_approved')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('date_completed')->nullable();
            $table->string('completed_by')->nullable();
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
        Schema::dropIfExists('maintenances');
    }
};
