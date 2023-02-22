<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web4_arquivos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->enum('IsDeletado', ['S', 'N'])->default('N');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 250)->nullable();
            $table->string('OrigemTipo', 250)->nullable();
            $table->string('OrigemCodigo', 250)->nullable();
            $table->string('Arquivo', 250)->nullable();
            $table->string('Legenda', 1000)->nullable();

            $table->index(['OrigemTipo', 'OrigemCodigo'], 'OrigemTipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_arquivos');
    }
};
