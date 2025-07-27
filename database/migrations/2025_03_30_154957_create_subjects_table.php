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
    Schema::create('subjects', function (Blueprint $table) {
        $table->id('subject_id');
        $table->string('subject_name');
        $table->unsignedBigInteger('department_id'); // Foreign key to departments table
        $table->integer('semester');
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
