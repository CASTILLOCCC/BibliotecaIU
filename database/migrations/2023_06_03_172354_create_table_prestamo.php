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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigoUsuario');
            $table->unsignedBigInteger('codigoEjemplar');
            $table->date('fechaPrestamo');
            $table->date('fechaDevolucion');
            $table->integer('cantidad');
            //Referencia de la clave foranea.
            $table->foreign('codigoUsuario')->references('id')->on('usuario');
            $table->foreign('codigoEjemplar')->references('id')->on('ejemplar');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamo');
    }
};
