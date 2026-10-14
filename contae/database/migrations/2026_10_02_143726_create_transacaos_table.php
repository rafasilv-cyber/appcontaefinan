<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations."
     */
    public function up(): void
    {
        Schema::create('transacaos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 255);
            $table->decimal('valor', 10, 2);
            $table->enum('tipo', ['receita', 'despesa']);
            $table->string('categoria', 100);
            $table->date('data');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacaos');
    }
};
