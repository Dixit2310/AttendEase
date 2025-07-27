<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('attendance', function (Blueprint $table) {
            $table->string('status')->change(); // Change status to VARCHAR
        });
    }

    public function down()
    {
        Schema::table('attendance', function (Blueprint $table) {
            $table->integer('status')->change(); // Revert if needed
        });
    }

};
