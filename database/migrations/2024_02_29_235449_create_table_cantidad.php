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
            $table->id();
            $table->timestamps();
            $table->string('idPedidos');
            $table->foreign('idPedidos')->references('id')->on('pedidos');
            $table->string('idProducto');
            $table->foreign('idProducto')->references('id')->on('producto');
            $table->string('cantidad');
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
