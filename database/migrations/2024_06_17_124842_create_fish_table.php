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
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('f_species_name');
            $table->date('f_dob');
            $table->string('f_gender');
            $table->string('f_avg_lifespan');
            $table->string('f_dietary_req');
            $table->date('f_joindate');
            $table->float('f_height');
            $table->float('f_weight');
            $table->string('f_description');
            $table->string('f_image');
            $table->integer('f_body_temp');
            $table->string('f_water_type');
            $table->string('f_color_variant');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fish');
    }
};
