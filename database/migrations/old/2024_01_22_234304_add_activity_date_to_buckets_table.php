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
        Schema::table('buckets', function (Blueprint $table) {
            $table->dateTime('activity_date_start')->nullable();
            $table->dateTime('activity_date_end')->nullable();
            $table->string('customer_last')->nullable();
            $table->string('customer_first')->nullable();
            $table->string('customer_ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buckets', function (Blueprint $table) {
            $table->dateTime('activity_date_start');
            $table->dateTime('activity_date_end');
            $table->string('customer_last');
            $table->string('customer_first');
            $table->string('customer_ip');
        });
    }
};
