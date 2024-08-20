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
        Schema::create('datpers', function (Blueprint $table) {
            $table->id();
            $table->integer('no_historia');
            $table->integer('CI');
            $table->text('nombre1');
            $table->text('appaterno');
            $table->text('apmaterno');
            $table->text('sexo');
            $table->text('est_civil');
            $table->time('fec_nac');
            $table->text('direccion');
            $table->integer('fono');
            $table->integer('fono2');
            $table->integer('celular');
            $table->text('ciudad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datpers');
    }
};
