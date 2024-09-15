<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoSecundario extends Model
{
    use HasFactory;

    protected $table = 'atendimento_secundario';
    protected $fillable = [
        'id',
        'condicao_funcional',
        'tratamento_ofertado',
        'evolucao_funcional',
        'sessoes',
        'assiduidade',
        'cond_ambiental_pessoal',
        'diag_fisioterapeutico',
        'criterios',
        'justificativa',
    ];
}
