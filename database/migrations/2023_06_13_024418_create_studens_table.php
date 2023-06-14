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
        Schema::create('studens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname_p');
            $table->string('lastname_m');
            $table->string('img')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('curp');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studens');
    }
};
