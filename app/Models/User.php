<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Campos que podem ser preenchidos em massa
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'tipo',
        'ativo',
        'pessoa_id',
    ];

    /**
     * Campos ocultos em respostas JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts automáticos de campos
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'ativo' => 'boolean',
    ];

    /**
     * Relacionamento: cada usuário pertence a uma pessoa
     */
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    /**
     * Verifica se o usuário é admin
     */
    public function isAdmin(): bool
    {
        return $this->tipo === 'admin';
    }

    /**
     * Verifica se o usuário é ativo
     */
    public function isActive(): bool
    {
        return (bool) $this->ativo;
    }
}
