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
        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('professor')->references('id')->on('users');
            $table->unsignedBigInteger('schoolClass');
            $table->foreign('schoolClass')->references('id')->on('school_classes');
            $table->unsignedBigInteger('classroom');
            $table->foreign('classroom')->references('id')->on('classrooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign(['professor', 'schoolClass', 'classroom']);
            $table->dropColumn('classroom');
            $table->dropColumn('schoolClass');
        });
    }
};
