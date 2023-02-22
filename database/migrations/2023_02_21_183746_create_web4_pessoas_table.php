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
        Schema::create('web4_pessoas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoOrigem')->default(0)->index('CodigoOrigem');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N')->index('Filtro1');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('Nome', 250)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('TelefoneFixo', 250)->nullable();
            $table->string('TelefoneCelular', 250)->nullable();
            $table->string('TelefoneFax', 250)->nullable();
            $table->string('CodigoCargo', 250)->nullable()->index('CodigoCargo');

            $table->index(['IsDeletado'], 'Filtro2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_pessoas');
    }
};
