<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $table = 'cidades';

    protected $fillable = [
      'name',
      'status'
    ];

    public static function getCidades() {
        return self::where('status', 'ativa')->get();
    }
}
