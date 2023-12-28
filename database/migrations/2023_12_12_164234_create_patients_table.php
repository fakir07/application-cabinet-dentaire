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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('telephone');
            $table->string('adresse');
            $table->string('ville');
            $table->string('sex');
            $table->integer('age');
            $table->string('cin');
            $table->string('cnss');
            $table->string("avatar")->default("assets/media/svg/avatars/011-boy-5.svg");
            $table->string("type_traitemnet")->nullable();
            $table->string("medcine_traitant")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};