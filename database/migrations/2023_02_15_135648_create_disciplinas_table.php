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
        Schema::create('disciplina', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('tempo_de_duracao');
            $table->string('aplicacao');
            $table->string('objetivo');
            $table->string('conteudos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplina');
    }
};
