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
        Schema::create('atendimento_basico', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('nome');
            $table->enum('sexo', ['masculino', 'feminino']);
            $table->string('telefone');
            $table->date('data_nascimento');
            $table->string('cpf')->unique();
            $table->string('cartao_sus')->unique();
            $table->string('endereco');
            $table->date('data_cadastro');
            $table->string('ubs');
            $table->string('acs');
            $table->text('diagnostico')->nullable();
            $table->text('comorbidades')->nullable();
            $table->date('ultima_internacao')->nullable();
            $table->string('responsavel_cadastro');
            $table->string('medico_responsavel');
            $table->enum('prioridade', ['baixa', 'media', 'alta']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimento_basico');
    }
};
