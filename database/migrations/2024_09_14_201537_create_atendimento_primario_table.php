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
        Schema::create('atendimento_primario', function (Blueprint $table) {
            $table->uuid('id')->primary();
            /* checkboxes e textareas associados */
            $table->boolean('dor')->default(false);
            $table->text('dor_desc')->nullable();
            $table->boolean('incapacidade')->default(false);
            $table->text('incapacidade_desc')->nullable();
            $table->boolean('osteomusculares')->default(false);
            $table->text('osteomusculares_desc')->nullable();
            $table->boolean('neurologicas')->default(false);
            $table->text('neurologicas_desc')->nullable();
            $table->boolean('uroginecologicas')->default(false);
            $table->text('uroginecologicas_desc')->nullable();
            $table->boolean('cardiovasculares')->default(false);
            $table->text('cardiovasculares_desc')->nullable();
            $table->boolean('respiratorias')->default(false);
            $table->text('respiratorias_desc')->nullable();
            $table->boolean('oncologicas')->default(false);
            $table->text('oncologicas_desc')->nullable();
            $table->boolean('pediatricas')->default(false);
            $table->text('pediatricas_desc')->nullable();
            $table->boolean('multiplas')->default(false);
            $table->text('multiplas_desc')->nullable();

            /* textareas */
            $table->text('queixa')->nullable();
            $table->text('achados_exame_fisico')->nullable();
            $table->text('testes_padronizados')->nullable();
            $table->text('condicao_funcional')->nullable();
            $table->text('fatores_ambientais')->nullable();
            $table->text('diagnostico_fisioterapeutico')->nullable();

            /* atividades que o paciente participa */
            $table->boolean('caminhada')->default(false);
            $table->boolean('pilates_musculacao_funcional')->default(false);
            $table->boolean('modalidade_esportiva')->default(false);
            $table->boolean('nunca_participou')->default(false);
            $table->boolean('outras')->default(false);
            $table->boolean('outras_desc')->default(false);

            /* atividades que o paciente participou - prefixo: prev de previous ou anterior */
            $table->boolean('prev_caminhada')->default(false);
            $table->boolean('prev_pilates_musculacao_funcional')->default(false);
            $table->boolean('prev_modalidade_esportiva')->default(false);
            $table->boolean('prev_nunca_participou')->default(false);
            $table->boolean('prev_outras')->default(false);
            $table->boolean('prev_outras_desc')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimento_primario');
    }
};
