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
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->string('id_card_number');
            $table->string('password');
            $table->string('name')->nullable();
            $table->date('born_date')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('regional_id');            
            $table->timestamps();

            $table->foreign('regional_id')->references('id')->on('regionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societies');
    }
};
