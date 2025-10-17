<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Relacionamento com tabela 'pessoas' (se existir)
            $table->foreignId('pessoa_id')
                  ->nullable()
                  ->constrained('pessoas')
                  ->onDelete('cascade');

            // Campos do usuário
            $table->string('username', 100)->unique();
            $table->string('name')->nullable(); // opcional — Filament usa 'name'
            $table->string('email')->unique()->nullable();
            $table->string('password'); // usa o padrão Laravel (bcrypt)
            
            // Tipo de usuário
            $table->enum('tipo', ['admin', 'pastor', 'professor', 'apoio'])->default('apoio');
            $table->boolean('ativo')->default(true);

            // Tokens e timestamps
            $table->rememberToken();
            $table->timestamps();
        });

        // Sessões e reset de senha (mantém compatível com Laravel)
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
