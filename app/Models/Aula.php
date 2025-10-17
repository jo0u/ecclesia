<?php

namespace App\Models;

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'data_aula',
        'hora',
        'professor_id',
        'sala_id',
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
