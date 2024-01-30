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
            $table->integer('quantity')->nullable();
            $table->integer('cost_per')->nullable();
            $table->integer('additions')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('taxes')->nullable();
            $table->integer('total_cost')->nullable();
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
            $table->integer('quantity');
            $table->integer('cost_per');
            $table->integer('additions');
            $table->integer('fees');
            $table->integer('taxes');
            $table->integer('total_cost');
        });
    }
};
