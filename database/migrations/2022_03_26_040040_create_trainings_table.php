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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->boolean('fuel_a_pwc');
            $table->boolean('fuel_a_pontoon');
            $table->boolean('fuel_a_jetboat');
            $table->boolean('fuel_counts_all_vehicles');
            $table->boolean('pwc_rental_prices');
            $table->boolean('pontoon_rental_prices');
            $table->boolean('scarab_rental_prices');
            $table->boolean('tie_pontoons_together');
            $table->boolean('dock_opening_procedure');
            $table->boolean('dock_closing_procedures');
            $table->boolean('guide_people_up_ramp');
            $table->boolean('crowd_management');
            $table->boolean('de_escalate_customer');
            $table->boolean('pwc_on_jetdock');
            $table->boolean('pwc_on_rocket_launcher');
            $table->boolean('drop_off_driver_pontoon');
            $table->boolean('drop_off_driver_scarab');
            $table->boolean('pwc_catch');
            $table->boolean('pwc_proper_pictures');
            $table->boolean('pwc_orientation');
            $table->boolean('pwc_handle_damage');
            $table->boolean('pwc_inform_customer_damage');
            $table->boolean('pwc_pinch_hose');
            $table->boolean('pwc_sar');
            $table->boolean('pwc_sar_truck');
            $table->boolean('pwc_trailer_load');
            $table->boolean('pwc_trailer_ramp');
            $table->boolean('pwc_pickup');
            $table->boolean('pwc_deliver');
            $table->boolean('pontoon_park_dock');
            $table->boolean('pontoon_park_dock_customer');
            $table->boolean('pontoon_proper_pictures');
            $table->boolean('pontoon_orientation');
            $table->boolean('pontoon_handle_damage');
            $table->boolean('pontoon_inform_damage_customer');
            $table->boolean('pontoon_park_island');
            $table->boolean('pontoon_park_island_solo');
            $table->boolean('pontoon_start_island_1');
            $table->boolean('pontoon_start_island_1_solo');
            $table->boolean('pontoon_start_island_3');
            $table->boolean('pontoon_start_island_3_solo');
            $table->boolean('pontoon_move_center_island');
            $table->boolean('pontoon_sar');
            $table->boolean('pontoon_sar_solo_pwc');
            $table->boolean('pontoon_sar_solo_truck');
            $table->boolean('pontoon_sar_solo_truck_pwc');
            $table->boolean('pontoon_load_trailer');
            $table->boolean('pontoon_pickup');
            $table->boolean('pontoon_deliver');
            $table->boolean('pontoon_driver');
            $table->boolean('scarab_park');
            $table->boolean('scarab_park_customers');
            $table->boolean('scarab_orientation');
            $table->boolean('scarab_proper_pictures');
            $table->boolean('scarab_handle_damage');
            $table->boolean('scarab_inform_damage_customer');
            $table->boolean('scarab_tie_dock');
            $table->boolean('scarab_pinch_hose');
            $table->boolean('scarab_sar');
            $table->boolean('scarab_sar_pwc_solo');
            $table->boolean('scarab_sar_truck_solo');
            $table->boolean('scarab_sar_truck_pwc_solo');
            $table->boolean('scarab_load_trailer');
            $table->boolean('scarab_pickup');
            $table->boolean('scarab_deliver');
            $table->boolean('scarab_driver');
            $table->boolean('aluminum_orientation');
            $table->boolean('aluminum_start_kill');
            $table->boolean('aluminum_lift_lower_engine');
            $table->boolean('aluminum_connect_remove_fuel');
            $table->boolean('aluminum_park_jetdock');
            $table->boolean('aluminum_load_trailer');
            $table->boolean('aluminum_trailer_ramp');
            $table->boolean('segway_orientation');
            $table->boolean('segway_power_on_off');
            $table->boolean('segway_stand_on');
            $table->boolean('segway_drive_turtle');
            $table->boolean('segway_drive');
            $table->boolean('segway_park');
            $table->boolean('segway_drive_ramp');
            $table->boolean('segway_maneuver_customers');
            $table->boolean('sled_start_stop');
            $table->boolean('sled_proper_pictures');
            $table->boolean('sled_orientation');
            $table->boolean('sled_add_fuel');
            $table->boolean('sled_add_oil');
            $table->boolean('sled_tie_2_trailer');
            $table->boolean('sled_tie_enclosed_trailer');
            $table->boolean('sled_change_belt');
            $table->boolean('sled_load_trailer_forklift');
            $table->boolean('sled_move_second_rack_forklift');
            $table->boolean('sled_safely_operate');
            $table->boolean('office_opening');
            $table->boolean('office_closing');
            $table->boolean('office_answer_phones');
            $table->boolean('office_checkin_customers');
            $table->boolean('office_clear_customers');
            $table->boolean('office_inform_customer_damage');
            $table->boolean('office_handle_coc');
            $table->boolean('office_perfect_settlement');
            $table->boolean('office_reconcile_uneven_settlement');
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
        Schema::dropIfExists('trainings');
    }
};
