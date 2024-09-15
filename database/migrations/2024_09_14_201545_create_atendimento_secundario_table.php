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
        Schema::create('atendimento_secundario', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->text('condicao_funcional')->nullable();
            $table->text('tratamento_ofertado')->nullable();
            $table->text('evolucao_funcional')->nullable();
            $table->string('sessoes')->nullable();
            $table->string('assiduidade')->nullable();
            $table->text('cond_ambiental_pessoal')->nullable();
            $table->text('diag_fisioterapeutico')->nullable();
            $table->text('criterios')->nullable();
            $table->text('justificativa')->nullable();
            //$table->text('atividades')->nullable();
            //$table->text('atividades_anteriores')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimento_secundario');
    }
};
