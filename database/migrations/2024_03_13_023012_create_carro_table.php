<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('marca',30);
            $table->text('descricao');
            $table->float('preco');
            $table->datetime('tempo_rodando');
            $table->date('data_lancamento');
            $table->integer('km_rodado');
            $table->timestamps();
            
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};