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
        Schema::create('web4_negocios', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('MigProtocolo', 250)->index('MigProtocolo');
            $table->dateTime('MigData');
            $table->string('MigIP', 50);
            $table->enum('IsMigrado', ['S', 'N'])->default('N');
            $table->string('CodigoImportacao', 250)->default('0');
            $table->string('OrigemTipo', 250)->nullable();
            $table->integer('CodigoRevenda')->default(0)->index('CodigoRevenda');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N')->index('Filtro1');
            $table->dateTime('DataCadastro')->nullable();
            $table->dateTime('DataUtimaVisita')->nullable();
            $table->dateTime('DataUtimaInteracao')->nullable()->index('ListagemNegocios1');
            $table->string('IP', 50)->nullable();
            $table->string('Titulo', 250)->nullable();
            $table->integer('CodigoCategoria')->default(0)->index('CodigoCategoria');
            $table->integer('CodigoAcao')->default(0)->index('CodigoAcao');
            $table->integer('CodigoResponsavel')->nullable()->default(0)->index('CodigoResponsavel');
            $table->integer('CodigoGrupoResponsavel')->nullable()->default(0);
            $table->date('DataInicio')->nullable();
            $table->date('DataConclusao')->nullable();
            $table->longText('Observacao')->nullable();
            $table->integer('CodigoEtapa')->nullable()->default(0)->index('CodigoEtapa');
            $table->integer('CodigoStatus')->nullable()->default(0)->index('CodigoStatus');
            $table->integer('CodigoStatus2')->nullable()->default(0);
            $table->decimal('Valor', 10)->nullable()->default(0);
            $table->decimal('ValorMensalidade', 10)->nullable()->default(0);
            $table->decimal('ValorFechado', 10)->nullable()->default(0);
            $table->string('FormaPagamento', 250)->nullable();
            $table->dateTime('UltimoAviso')->nullable()->index('UltimoAviso');
            $table->integer('PerdaMotivo')->nullable()->default(0);
            $table->decimal('PerdaValor', 10)->nullable()->default(0);
            $table->string('PerdaCondicao', 250)->nullable();
            $table->dateTime('PerdaData')->nullable();
            $table->string('PerdaIP', 50)->nullable();
            $table->string('DEL_IP', 50)->nullable();
            $table->dateTime('DEL_Data')->nullable();
            $table->integer('DEL_OrigemCodigo')->nullable();
            $table->string('DEL_Motivo', 250)->nullable();
            $table->string('TxtDor', 250)->nullable();
            $table->string('TxtSituacao', 250)->nullable();
            $table->string('TxtProblema', 250)->nullable();
            $table->string('TxtImplicacoes', 250)->nullable();
            $table->longText('DadosComplementares')->nullable();
            $table->longText('ObservacaoAdmin')->nullable();
            $table->longText('ObservacaoStatus')->nullable();
            $table->integer('EnvAut_Qtd')->nullable()->default(0);
            $table->dateTime('EnvAut_UltimoEnvio')->nullable();
            $table->enum('EnvAut_IsFinalizado', ['S', 'N'])->nullable()->default('N');
            $table->longText('HistoricoUltimo')->nullable();
            $table->integer('Prazo')->nullable()->default(0);

            $table->index(['IsDeletado', 'EnvAut_IsFinalizado', 'EnvAut_Qtd', 'DataCadastro'], 'EnvioEmail1');
            $table->index(['IsDeletado', 'CodigoStatus', 'EnvAut_IsFinalizado', 'EnvAut_Qtd', 'EnvAut_UltimoEnvio'], 'EnvioEmail12');
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
        Schema::dropIfExists('web4_negocios');
    }
};
