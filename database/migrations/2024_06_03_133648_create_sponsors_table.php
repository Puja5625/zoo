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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('s_name');
            $table->string('s_existing_name');
            $table->integer('s_phone_number');
            $table->string('s_address');
            $table->integer('s_yearly_revenue');
            $table->string('s_email')->nullable();
            $table->string('s_password');
            $table->string('s_business_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};
