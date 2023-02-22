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
        Schema::create('com_paginas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true)->unique('Codigo');
            $table->integer('CodigoPai')->nullable()->default(0)->index('CodigoPai');
            $table->enum('IsMenu', ['S', 'N'])->nullable()->index('IsMenu');
            $table->string('Nome')->nullable();
            $table->string('CodGrupo', 50)->nullable()->index('CodGrupo');
            $table->string('CodNome', 50)->nullable();
            $table->string('Link')->nullable();
            $table->string('Target', 250)->nullable();
            $table->string('Arquivo', 250)->nullable();
            $table->string('Get', 250)->nullable();
            $table->integer('Ordem')->nullable()->default(0)->index('Ordem');

            $table->primary(['Codigo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_paginas');
    }
};
