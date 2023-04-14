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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('operations_name')->nullable();
            $table->string('rental_type')->nullable();
            $table->boolean('maintenance_mode')->nullable()->default('0');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();
            $table->string('youtube')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('etsy')->nullable();
            $table->string('website_url')->nullable();
            $table->text('logo_square_1')->nullable();
            $table->text('logo_square_2')->nullable();
            $table->text('logo_horizontal_1')->nullable();
            $table->text('logo_horizontal_2')->nullable();
            $table->text('favicon')->nullable();
            $table->text('analytics_link')->nullable();
            $table->text('analytic_link_1')->nullable();
            $table->text('analytic_link_2')->nullable();
            $table->text('analytic_link_3')->nullable();
            $table->text('analytic_link_4')->nullable();
            $table->text('analytic_link_5')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
