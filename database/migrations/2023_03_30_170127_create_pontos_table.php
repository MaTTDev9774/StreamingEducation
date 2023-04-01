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
        Schema::create('pontos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->bigInteger('recurso_id')->unsigned();
            $table->foreign('recurso_id')->references('id')->on('recursos')->onDelete('cascade');
            $table->string('pontos');
            $table->bigInteger('questoes_id')->unsigned();
            $table->foreign('questoes_id')->references('id')->on('questoes')->onDelete('cascade');
            $table->string('opcao_escolhida');
            $table->string('texto_questao_aberta');
            $table->string('nome_arquivo_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontos');
    }
};
