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
        Schema::create('additions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('quantity')->nullable();
            $table->string('cost')->nullable();
            $table->string('image')->nullable();
            $table->boolean('visible')->default('0');
            $table->integer('type_id')->nullable();
            $table->string('type_name')->nullable();
            $table->integer('bucket_id')->nullable();
            $table->string('bucket_name')->nullable();
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
        Schema::dropIfExists('additions');
    }
};
