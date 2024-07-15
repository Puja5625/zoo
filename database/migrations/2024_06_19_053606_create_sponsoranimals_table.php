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
        Schema::create('sponsoranimals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sponsor_id')->default(0);
            $table->foreign('sponsor_id')->references('id')->on('sponsors') ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('total_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('sponsor_animal');
            $table->string('signage_photo');
            $table->string('s_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsoranimals');
    }
};
