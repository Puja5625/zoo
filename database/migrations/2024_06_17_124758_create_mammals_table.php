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
        Schema::create('mammals', function (Blueprint $table) {
            $table->id();
            $table->string('m_name');
            $table->string('m_species_name');
            $table->date('m_dob');
            $table->string('m_gender');
            $table->string('m_avg_lifespan');
            $table->string('m_dietary_req');
            $table->date('m_joindate');
            $table->float('m_height');
            $table->float('m_weight');
            $table->string('m_description');
            $table->string('m_image');
            $table->string('m_gest_period');
            $table->string('m_category');
            $table->integer('m_avg_body_temp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mammals');
    }
};
