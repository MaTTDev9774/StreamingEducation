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
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_do_recurso');
            $table->string('pontuacao');
            $table->enum('tipo',['video','pdf','questionario','upload_pdf']);
            $table->bigInteger('atividade_id')->unsigned();
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');
            $table->string('link_video');
            $table->string('link_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};
