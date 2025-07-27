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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id('timetable_id');
            $table->date('date');
            $table->time('starttime');
            $table->time('endtime');

            // Foreign keys
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('department_id');

            $table->string('division', 50);

            $table->timestamps();

            // Set up foreign key constraints
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->onDelete('cascade');
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty')->onDelete('cascade');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
