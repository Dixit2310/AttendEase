<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('student_list', function (Blueprint $table) {
            $table->id('studentlist_id');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('enrollment')->unique();
            $table->string('phone')->unique();
            $table->string('temp_password')->nullable();
            $table->string('password')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('dob');
            
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');

            $table->integer('semester');
            $table->string('division');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_list');
    }
};
