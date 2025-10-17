<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscalaCulto extends Model
{
    use HasFactory;

    protected $table = 'escalas_cultos';

    protected $fillable = [
        'pessoa_id',
        'data_culto',
        'hora_culto',
        'descricao',
        'status',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}