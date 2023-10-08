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
        Schema::create('apoinments', function (Blueprint $table) {
            $table->id();
            $table->string('dept_name');
            $table->string('doctor_name');
            $table->string('date');
            $table->integer('time');
            $table->string('name');
            $table->integer('phone');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoinments');
    }
};
