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
        Schema::create('bounded_concrete_area_l_m_p_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('area_m2');
            $table->date('start_rent');
            $table->date('end_rent');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bounded_concrete_area_l_m_p_s');
    }
};
