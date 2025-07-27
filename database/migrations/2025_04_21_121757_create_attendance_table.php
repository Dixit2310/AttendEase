<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->unsignedBigInteger('studentlist_id');
            $table->unsignedBigInteger('faculty_id');
            $table->date('date');
            $table->boolean('status');  // Use boolean instead of enum
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('studentlist_id')->references('studentlist_id')->on('student_list')->onDelete('cascade');
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty')->onDelete('cascade');

            // Prevent duplicate entries for same student/date
            $table->unique(['studentlist_id', 'date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
