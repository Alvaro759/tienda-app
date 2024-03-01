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
        Schema::create('table_direccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('calle_numero');
            $table->string('codigoPostal');
            $table->string('provincia');
            $table->string('pais');
            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_direccion');
    }
};
