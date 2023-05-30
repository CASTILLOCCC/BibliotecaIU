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
        Schema::create('libro', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('isbn');
            $table->unsignedBigInteger('codigoEditorial');
            $table->bigInteger('paginas');
            $table->unsignedBigInteger('codigoAutor');
            //Referencia de la clave foranea.
            $table->foreign('codigoEditorial')->references('id')->on('editorial');
            $table->foreign('codigoAutor')->references('id')->on('autor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
