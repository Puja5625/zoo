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
        Schema::create('birds', function (Blueprint $table) {
            $table->id();
            $table->string('b_name');
            $table->string('b_species_name');
            $table->date('b_dob');
            $table->string('b_gender');
            $table->string('b_avg_lifespan');
            $table->string('b_dietary_req');
            $table->date('b_joindate');
            $table->float('b_height');
            $table->float('b_weight');
            $table->string('b_description');
            $table->string('b_image');
            $table->string('b_nest_const');
            $table->float('b_cluth_size');
            $table->float('b_wingspan');
            $table->string('b_ability_fly');
            $table->string('b_color_variant');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birds');
    }
};
