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
        Schema::create('com_paginas_acoes', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true)->unique('Codigo');
            $table->integer('CodigoPagina')->nullable()->default(0);
            $table->string('Nome')->nullable();
            $table->string('CodNome', 50)->nullable();

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
        Schema::dropIfExists('com_paginas_acoes');
    }
};
