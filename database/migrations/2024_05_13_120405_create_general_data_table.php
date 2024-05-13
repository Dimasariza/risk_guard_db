<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general_data', function (Blueprint $table) {
            $table->string("g_data_component_id");
            $table->string("g_data_tag_number");
            $table->date("g_data_start_date");
            $table->integer("g_data_design_pressure");
            $table->double("g_data_weld_joint_efficiency");
            $table->string("g_data_type_of_equipment");
            $table->integer("g_data_yield_strength");
            $table->integer("g_data_tensil_strength");
            $table->integer("g_data_allowable_strength");
            $table->integer("g_data_min_design_metal_temp");
            $table->string("g_data_material_construction");
            $table->integer("g_data_furnished_thickness");
            $table->double("g_data_corrosion_allowance");
            $table->boolean("g_data_post_weld_heat_treatment");
            $table->double("g_data_outside_diameter");
            $table->double("g_data_inside_diameter");
            $table->double("g_data_height");
            $table->boolean("g_data_insulation");
            $table->integer("g_data_joint_efficiency");
            $table->integer("g_data_operating_temperature");
            $table->integer("g_data_operating_pressure");
            $table->integer("g_data_fluid");
            $table->integer("g_data_liquid");
            $table->date("g_data_inspection_history");
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_data');
    }
};
