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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->string('purchase_type');
            $table->string('purchase_date');
            $table->string('activity_date');
            $table->string('activity_item');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('zip_code');
            $table->string('payment_type');
            $table->string('payment_status');
            $table->string('ticket_list');
            $table->string('email');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('source');
            $table->string('customer_notes')->nullable();
            $table->string('list_price');
            $table->string('total_discount_amount');
            $table->string('customer_fees');
            $table->string('total_charge');
            $table->string('status')->nullable();
            $table->string('check_in_by')->nullable();
            $table->string('check_in_time')->nullable();
            $table->string('launched_by')->nullable();
            $table->string('launched_time')->nullable();
            $table->string('cleared_by')->nullable();
            $table->string('cleared_time')->nullable();
            $table->string('invoice_number')->nullable();
            $table->text('incident')->nullable();
            $table->string('image_1')->nullable();
            $table->string('coc_status')->nullable();
            $table->string('last_four')->nullable();
            $table->string('fuel_count')->nullable();
            $table->string('fuel_count_actual')->nullable();
            $table->string('late_fee')->nullable();
            $table->string('toy_fee')->nullable();
            $table->string('trailer_fee')->nullable();
            $table->string('sar_fee')->nullable();
            $table->string('cleaning_fee')->nullable();
            $table->string('no_show')->nullable();
            $table->string('coc_vehicle')->nullable();
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
        Schema::dropIfExists('rentals');
    }
};
