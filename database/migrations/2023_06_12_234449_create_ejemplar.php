<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.jnkj
     */
    public function up(): void
    {
        Schema::create('ejemplar', function (Blueprint $table) {
            $table->id();
            $table->string('localizacion');
            $table->integer('cantidad');
            $table->unsignedBigInteger('codigoLibro');
            //Referencia de la clave foranea.
            $table->foreign('codigoLibro')->references('id')->on('libro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplar');
    }
};
