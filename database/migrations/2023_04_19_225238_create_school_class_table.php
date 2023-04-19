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
        Schema::create('schoolClass', function (Blueprint $table) {
            $table->id();
            $table->boolean('natOrIB');
            $table->string('department');
            $table->integer('year');
            $table->string('major');
            $table->string('classCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_class');
    }
};
