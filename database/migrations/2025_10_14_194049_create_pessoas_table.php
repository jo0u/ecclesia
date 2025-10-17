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
    Schema::create('pessoas', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 150);
        $table->string('email')->nullable()->unique();
        $table->string('telefone', 20)->nullable();
        $table->date('data_nascimento')->nullable();
        $table->boolean('ativo')->default(true);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
