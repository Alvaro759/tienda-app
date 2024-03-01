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
        Schema::create('table_cantidad', function (Blueprint $table) {
            $table->string('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->string('idProducto');
            $table->foreign('idProducto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_cantidad');
    }
};
