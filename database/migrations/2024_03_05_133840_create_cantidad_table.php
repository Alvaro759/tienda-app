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
        Schema::create('cantidad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('idPedidos');
            $table->foreign('idPedidos')->references('id')->on('pedidos');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('producto');
            $table->unsignedBigInteger('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cantidad');
    }
};
