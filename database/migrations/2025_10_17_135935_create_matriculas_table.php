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
    Schema::create('matriculas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pessoa_id')->constrained('pessoas')->onDelete('cascade');
        $table->foreignId('aula_id')->constrained('aulas')->onDelete('cascade');
        $table->date('data_matricula')->default(now());
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
