<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoBasico extends Model
{
    use HasFactory;

    protected $table = 'atendimento_basico';
    protected $fillable = [
        'id',
        'nome',
        'sexo',
        'telefone',
        'data_nascimento',
        'cpf',
        'cartao_sus',
        'endereco',
        'data_cadastro',
        'ubs',
        'acs',
        'diagnostico',
        'comorbidades',
        'ultima_internacao',
        'responsavel_cadastro',
        'medico_responsavel',
        'prioridade',
    ];
}
