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
        Schema::create('autor', function (Blueprint $table) {
            $table->id();
            $table->string('nombreAutor');
            $table->unsignedBigInteger('codigoEditorial');
            //Referencia de la clave foranea.
            $table->foreign('codigoEditorial')->references('id')->on('editorial');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autor');
    }
};
