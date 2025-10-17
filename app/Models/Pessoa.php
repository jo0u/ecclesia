<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'ativo',
    ];

    // Relacionamentos
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

    public function professor()
    {
        return $this->hasOne(Professor::class);
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class);
    }

    public function escalasCultos()
    {
        return $this->hasMany(EscalaCulto::class);
    }
}
