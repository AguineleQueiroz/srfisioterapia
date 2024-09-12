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
        Schema::table('atendimentos', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('user_id');
            $table->uuid('atendimento_basico_id');
            $table->uuid('atendimento_primario_id');
            $table->uuid('atendimento_secundario_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('atendimento_basico_id')->references('id')->on('atendimento_basico')->onDelete('cascade');
            $table->foreign('atendimento_primario_id')->references('id')->on('atendimento_primario')->onDelete('cascade');
            $table->foreign('atendimento_secundario_id')->references('id')->on('atendimento_secundario')->onDelete('cascade');

            $table->string('encaminhamento')->nullable();
            $table->string('tipo_cidade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendimentos');
    }
};
