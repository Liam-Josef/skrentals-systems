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
        Schema::create('availabil_duration', function (Blueprint $table) {
            $table->primary(['availabil_id', 'duration_id']);
            $table->foreignId('availabil_id')->constrained()->onDelete('cascade');
            $table->foreignId('duration_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('availabil_duration');
    }
};
