<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up(): void
{
    Schema::create('escalas_cultos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pessoa_id')->constrained('pessoas')->onDelete('cascade');
        $table->date('data_culto');
        $table->time('hora_culto');
        $table->string('descricao')->nullable();
        $table->enum('status', ['pendente', 'confirmado', 'realizado'])->default('pendente');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escalas_cultos');
    }
};
