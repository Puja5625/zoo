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
        Schema::create('setweekanimals', function (Blueprint $table) {
            $table->id();
            $table->string('setweekan_name');
            $table->string('setweekan_species_name');
            $table->date('setweekan_dob');
            $table->string('setweekan_gender');
            $table->date('setweekan_joindate');
            $table->string('setweekan_description');
            $table->string('setweekan_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setweekanimals');
    }
};
