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
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->enum('tipo', ['fechada','aberta','colunar']);
            $table->bigInteger('questionario_id')->unsigned();
            $table->foreign('questionario_id')->references('id')->on('questionario')->onDelete('cascade');
            $table->string('quantidade_linhas');
            $table->string('quantidade_caracteres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questoes');
    }
};
