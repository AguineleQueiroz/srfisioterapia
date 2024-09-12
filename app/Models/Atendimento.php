<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $table='atendimentos';

    protected $fillable = [
        'user_id',
        'atendimento_basico_id',
        'atendimento_primario_id',
        'atendimento_secundario_id',
        'encaminhamento',
        'tipo_cidade'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function historicoDeEncaminhamentos()
    {
        return $this->hasMany(HistoricoEncaminhamentos::class);
    }
}
