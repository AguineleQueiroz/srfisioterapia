<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoPrimario extends Model
{
    use HasFactory;

    protected $table = 'atendimento_primario';
    protected $fillable = [
        'id',
        'dor',
        'dor_desc',
        'incapacidade',
        'incapacidade_desc',
        'osteomusculares',
        'osteomusculares_desc',
        'neurologicas',
        'neurologicas_desc',
        'uroginecologicas',
        'uroginecologicas_desc',
        'cardiovasculares',
        'cardiovasculares_desc',
        'respiratorias',
        'respiratorias_desc',
        'oncologicas',
        'oncologicas_desc',
        'pediatricas',
        'pediatricas_desc',
        'multiplas',
        'multiplas_desc',
        'queixa',
        'achados_exame_fisico',
        'testes_padronizados',
        'condicao_funcional',
        'fatores_ambientais',
        'diagnostico_fisioterapeutico',
        'caminhada',
        'pilates_musculacao_funcional',
        'modalidade_esportiva',
        'nunca_participou',
        'outras',
        'outras_desc',
        'prev_caminhada',
        'prev_pilates_musculacao_funcional',
        'prev_modalidade_esportiva',
        'prev_nunca_participou',
        'prev_outras',
        'prev_outras_desc',
    ];
}
