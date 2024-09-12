<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoEncaminhamentos extends Model
{
    use HasFactory;

    protected $table = 'historico_encaminhamentos';

    protected $fillable = [
        'user_id',
        'atendimento_id',
        'encaminhamento',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function atendimento()
    {
        return $this->belongsTo(Atendimento::class, 'atendimento_id');
    }
}
