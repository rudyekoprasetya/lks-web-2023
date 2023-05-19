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
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('dose')->nullable();
            $table->date('date')->nullable();
            $table->unsignedBigInteger('society_id');
            $table->unsignedBigInteger('spot_id');
            $table->unsignedBigInteger('vaccine_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('officer_id');
            $table->timestamps();

            $table->foreign('society_id')->references('id')->on('societies')->onDelete('cascade');
            $table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade');
            $table->foreign('vaccine_id')->references('id')->on('vaccines')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('medicals')->onDelete('cascade');
            $table->foreign('officer_id')->references('id')->on('medicals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccinations');
    }
};
