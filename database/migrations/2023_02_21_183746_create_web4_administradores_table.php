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
        Schema::create('web4_administradores', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoImportacao')->default(0);
            $table->string('ImportacaoTipo', 50);
            $table->integer('ImportacaoCodigo')->default(0);
            $table->integer('CodigoRevenda')->default(0);
            $table->enum('Status', ['A', 'D'])->nullable()->default('A');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N')->index('IsDeletado');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->enum('IsEditar', ['S', 'N'])->nullable()->default('S');
            $table->dateTime('UltimoAcesso')->nullable();
            $table->string('Nome', 250)->nullable();
            $table->string('Email', 250)->nullable()->index('Email');
            $table->string('Usuario', 250)->nullable()->index('Usuario');
            $table->string('Senha', 500)->nullable();
            $table->integer('CodigoGrupo')->nullable()->default(0);
            $table->string('CodigoDepartamento', 250)->nullable()->default('0');
            $table->string('CodigoCargo', 250)->nullable();
            $table->string('EndEstado', 250)->nullable()->default('0');
            $table->string('EndCidade', 250)->nullable()->default('0');
            $table->string('EndBairro', 250)->nullable();
            $table->string('EndLogradouro', 250)->nullable();
            $table->string('EndComplemento', 250)->nullable();
            $table->string('EndCEP', 250)->nullable();
            $table->string('EndNumero', 250)->nullable();
            $table->string('TelefoneFixo', 250)->nullable();
            $table->string('TelefoneCelular', 250)->nullable();
            $table->string('TelefoneFax', 250)->nullable();
            $table->string('RedesFacebook', 250)->nullable();
            $table->string('RedesTwitter', 250)->nullable();
            $table->string('RedesLinkedIn', 250)->nullable();
            $table->string('RedesSkype', 250)->nullable();
            $table->string('RedesMSN', 250)->nullable();
            $table->string('Foto', 250)->nullable();
            $table->longText('Observacao')->nullable();
            $table->enum('IsRevendas', ['S', 'T'])->nullable()->default('T');
            $table->enum('IsEtapas', ['S', 'T'])->nullable()->default('T');
            $table->enum('IsResponsavel', ['S', 'T'])->nullable()->default('T');
            $table->enum('IsGrupo', ['S', 'T'])->nullable()->default('T');
            $table->enum('IsNegociosSemResponsavel', ['S', 'N'])->nullable()->default('S');
            $table->enum('IsRestringirAccInt', ['S', 'N'])->nullable()->default('N');
            $table->string('Tipo', 250)->nullable()->default('ADMINISTRADOR');
            $table->string('NegociosDDDsNegar', 250)->nullable();
            $table->string('NegociosEstadosNegar', 250)->nullable();
            $table->dateTime('DisAviNLgnUltimoAviso')->nullable();
            $table->enum('DisAviNLgnIs', ['S', 'N'])->nullable()->default('N');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_administradores');
    }
};
