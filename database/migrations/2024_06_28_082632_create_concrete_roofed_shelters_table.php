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
        Schema::create('concrete_roofed_shelters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('area_m2');
            $table->date('start_date');
            $table->date('end_date');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concrete_roofed_shelters');
    }
};