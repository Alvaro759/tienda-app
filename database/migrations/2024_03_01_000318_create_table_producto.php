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
        Schema::create('table_producto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('precio');
            $table->string('stock');
            $table->string('idCategoria');
            $table->foreign('idCategoria')->references('id')->on('categoria');
            $table->string('idAlmacen');
            $table->foreign('idAlmacen')->references('id')->on('almacen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_producto');
    }
};
