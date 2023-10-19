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
        Schema::create('vacants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('skills', 500);
            $table->string('competencies', 900);
            $table->unsignedBigInteger('expertise_required');
            $table->string('salary', 30);
            $table->unsignedBigInteger('places_available');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacants');
    }
};
