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
        Schema::create('web4_campanhas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N')->index('Filtro1');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('Assunto', 250)->nullable();
            $table->longText('Mensagem')->nullable();
            $table->enum('Status', ['A', 'F'])->nullable()->default('A');
            $table->integer('EmailsQtd')->nullable()->default(0);
            $table->integer('EmailsAtual')->nullable()->default(0);
            $table->dateTime('DataUltimoEnvio')->nullable();
            $table->string('Tipo', 50)->default('0');
            $table->integer('CodigoStatus')->default(0);
            $table->integer('CodigoEtapa')->default(0);
            $table->date('DataCadastroDe');
            $table->date('DataCadastroAte');
            $table->enum('DataCadastroIs', ['S', 'N'])->default('N');
            $table->string('ResponderParaNome', 250);
            $table->string('ResponderParaEmail', 250);

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
        Schema::dropIfExists('web4_campanhas');
    }
};
