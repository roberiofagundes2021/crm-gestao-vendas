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
        Schema::create('web4_revendas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('MigProtocolo', 250)->index('MigProtocolo');
            $table->dateTime('MigData');
            $table->string('MigIP', 50);
            $table->enum('IsMigrado', ['S', 'N'])->default('N');
            $table->integer('CodigoImportacao')->default(0);
            $table->integer('CodigoRevendaOrigem')->default(0);
            $table->string('ImportacaoTipo', 50);
            $table->integer('ImportacaoCodigo')->default(0);
            $table->enum('Status', ['A', 'D'])->nullable()->default('A');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->dateTime('DataUltimoAcesso')->nullable();
            $table->integer('CodigoCategoria')->nullable()->default(0)->index('CodigoCategoria');
            $table->integer('CodigoResponsavel')->nullable()->default(0)->index('CodigoResponsavel');
            $table->integer('CodigoGrupoResponsavel')->nullable()->default(0);
            $table->integer('CodigoSetor')->nullable()->default(0)->index('CodigoSetor');
            $table->string('CodigoFormaContato', 250)->nullable()->index('CodigoFormaContato');
            $table->enum('IsPessoa', ['F', 'J'])->nullable()->default('F');
            $table->string('Nome_RazaoSocial', 250)->nullable();
            $table->string('NomeFantasia', 250)->nullable();
            $table->string('CPF_CNPJ', 250)->nullable();
            $table->string('RG_IE', 250)->nullable();
            $table->string('Email', 250)->nullable();
            $table->string('Usuario', 250)->nullable();
            $table->string('Senha', 500)->nullable();
            $table->string('EndEstado', 250)->nullable()->default('0');
            $table->string('EndCidade', 250)->nullable()->default('0');
            $table->string('EndBairro', 250)->nullable();
            $table->string('EndLogradouro', 250)->nullable();
            $table->string('EndComplemento', 250)->nullable();
            $table->string('EndNumero', 250)->nullable();
            $table->string('EndCEP', 250)->nullable();
            $table->string('TelefoneFixo', 250)->nullable();
            $table->string('TelefoneCelular', 250)->nullable();
            $table->integer('TelefoneCelularOperadora')->nullable()->default(0);
            $table->string('TelefoneFax', 250)->nullable();
            $table->string('RedesFacebook', 250)->nullable();
            $table->string('RedesTwitter', 250)->nullable();
            $table->string('RedesLinkedIn', 250)->nullable();
            $table->string('RedesSkype', 250)->nullable();
            $table->string('RedesMSN', 250)->nullable();
            $table->string('RedesSite', 250)->nullable();
            $table->string('Foto', 250)->nullable();
            $table->longText('Observacao')->nullable();
            $table->string('Etapas', 500)->nullable();
            $table->enum('NegociosGanhos_AvisoIs', ['S', 'N'])->nullable()->default('N');
            $table->string('NegociosGanhos_AvisoEmail', 250)->nullable();
            $table->integer('EnvAut_Qtd')->nullable()->default(0);
            $table->dateTime('EnvAut_UltimoEnvio')->nullable();
            $table->enum('EnvAut_IsFinalizado', ['S', 'N'])->nullable()->default('N');

            $table->index(['IsDeletado', 'Status'], 'Filtro1');
            $table->index(['IsDeletado', 'Status'], 'Filtro2');
            $table->index(['ImportacaoCodigo', 'ImportacaoTipo'], 'idx_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_revendas');
    }
};
