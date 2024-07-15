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
        Schema::create('amphibians', function (Blueprint $table) {
            $table->id();
            $table->string('a_name');
            $table->string('a_species_name');
            $table->date('a_dob');
            $table->string('a_gender');
            $table->string('a_avg_lifespan');
            $table->string('a_dietary_req');
            $table->date('a_joindate');
            $table->float('a_height');
            $table->float('a_weight');
            $table->string('a_description');
            $table->string('a_image');
            $table->string('a_rep_type');
            $table->integer('a_cluth_size');
            $table->integer('a_num_offspring');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amphibians');
    }
};
