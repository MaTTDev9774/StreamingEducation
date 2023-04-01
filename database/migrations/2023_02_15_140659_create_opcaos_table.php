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
        Schema::create('opcoes', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->bigInteger('questoes_id')->unsigned();
            $table->foreign('questoes_id')->references('id')->on('questoes')->onDelete('cascade');
            $table->string('opcao_certa');
            $table->string('opcao_relacionada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcoes');
    }
};
