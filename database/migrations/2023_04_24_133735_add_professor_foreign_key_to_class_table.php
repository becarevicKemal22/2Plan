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
        Schema::table('class', function (Blueprint $table) {
            $table->foreign('professor')->references('id')->on('users');
            $table->unsignedBigInteger('schoolClass');
            $table->foreign('schoolClass')->references('id')->on('schoolClass');
            $table->unsignedBigInteger('classroom');
            $table->foreign('classroom')->references('id')->on('classroom');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('class', function (Blueprint $table) {
            $table->dropForeign(['professor', 'schoolClass', 'classroom']);
            $table->dropColumn('classroom');
            $table->dropColumn('schoolClass');
        });
    }
};
