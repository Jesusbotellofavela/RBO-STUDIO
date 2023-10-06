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
        Schema::create('transacciones_financieras', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_transaccion', 50);
            $table->float('monto');
            $table->date('fecha_transaccion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transacciones_financieras');
    }
};
