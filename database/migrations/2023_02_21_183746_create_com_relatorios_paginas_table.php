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
        Schema::create('com_relatorios_paginas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('Agrupador', 250)->nullable()->index('Agrupador');
            $table->string('Nome', 250)->nullable();
            $table->string('Link', 250)->nullable();
            $table->integer('Ordem')->nullable()->default(0)->index('Ordem');
            $table->integer('OrdemAgrupador')->nullable()->default(0)->index('OrdemAgrupador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_relatorios_paginas');
    }
};
