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
        Schema::create('web4_historico', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoTarefa')->default(0);
            $table->enum('IsDeletado', ['S', 'N'])->default('N');
            $table->integer('DestinoCodigo')->default(0);
            $table->string('DestinoTipo', 250);
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 250)->nullable();
            $table->string('OrigemTipo', 250)->nullable();
            $table->string('OrigemCodigo', 250)->nullable();
            $table->longText('Mensagem')->nullable();
            $table->integer('CodigoPessoa')->nullable()->default(0);

            $table->index(['DestinoCodigo', 'DestinoTipo'], 'DestinoCodigo');
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
        Schema::dropIfExists('web4_historico');
    }
};
