<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Pessoa;

class Professor extends Model
{
     protected $table = 'professores'; // Especifica o nome da tabela
     protected $fillable = [
        'pessoa_id',
        'especialidade', 
        'ativo'
    ];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }
}
