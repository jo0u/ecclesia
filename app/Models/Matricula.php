<?php

namespace App\Models;

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'pessoa_id',
        'aula_id',
        'data_matricula',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}
