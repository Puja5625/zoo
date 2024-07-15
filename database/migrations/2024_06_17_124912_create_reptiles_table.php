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
        Schema::create('reptiles', function (Blueprint $table) {
            $table->id();
            $table->string('r_name');
            $table->string('r_species_name');
            $table->date('r_dob');
            $table->string('r_gender');
            $table->string('r_avg_lifespan');
            $table->string('r_dietary_req');
            $table->date('r_joindate');
            $table->float('r_height');
            $table->float('r_weight');
            $table->string('r_description');
            $table->string('r_image');
            $table->string('r_rep_type');
            $table->integer('r_cluth_size');
            $table->integer('r_num_offspring');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reptiles');
    }
};
