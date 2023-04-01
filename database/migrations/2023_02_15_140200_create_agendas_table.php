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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('horario');
            $table->string('link_acesso');
            $table->bigInteger('grupo_id');
            $table->bigInteger('disciplina_id')->unsigned();
            $table->foreign('disciplina_id')->references('id')->on('disciplina')->onDelete('cascade');
            $table->string('liberar_para_escolha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
