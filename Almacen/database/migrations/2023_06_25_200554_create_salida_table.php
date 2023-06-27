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
        Schema::create('salida', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('id_productos');
            $table->foreign('id_productos')->references('id')->on('productos');
            $table->float('cantidad')->nullable();
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salida');
    }
};
