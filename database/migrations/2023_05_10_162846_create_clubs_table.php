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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
          //  $table->timestamps();
          $table->string('name');
          $table->integer('start_time');
          $table->integer('duration');
          $table->unsignedBigInteger('professor_id');
          $table->foreign('professor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clubs', function (Blueprint $table) {
            Schema::dropIfExists('clubs');
        });

    }
};
