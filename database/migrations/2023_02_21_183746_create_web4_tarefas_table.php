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
        Schema::create('web4_tarefas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('CodigoImportacao', 250)->default('0');
            $table->integer('CodigoNegocio')->default(0);
            $table->integer('CodigoHistorico')->default(0);
            $table->string('OrigemTipo', 250)->nullable();
            $table->integer('CodigoRevenda')->default(0)->index('CodigoRevenda');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N')->index('Filtro1');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('Titulo', 250)->nullable();
            $table->integer('CodigoResponsavel')->default(0)->index('CodigoResponsavel');
            $table->integer('CodigoCategoria')->default(0)->index('CodigoCategoria');
            $table->integer('CodigoAcao')->default(0)->index('CodigoAcao');
            $table->longText('Texto')->nullable();
            $table->dateTime('DES_DataHora')->nullable();
            $table->enum('IsFinalizado', ['S', 'N'])->nullable()->default('N');
            $table->dateTime('DataFinalizacao')->nullable();
            $table->string('TxtFinalizacao', 500)->nullable();
            $table->integer('MotivoFinalizacao')->nullable()->default(0);
            $table->enum('IsDataTipo', ['DE', 'DS', 'M'])->nullable()->default('DE');
            $table->dateTime('IsData_DataHora')->nullable();
            $table->time('IsData_DataHora_HoraFim')->nullable();
            $table->string('IsData_DiasSemana', 250)->nullable();
            $table->time('IsData_DiasSemana_Hora')->nullable();
            $table->time('IsData_DiasSemana_HoraFim')->nullable();
            $table->integer('IsData_Mes_Dia')->nullable()->default(0);
            $table->time('IsData_Mes_Hora')->nullable();
            $table->time('IsData_Mes_HoraFim')->nullable();
            $table->dateTime('UltimoAviso')->nullable();
            $table->integer('CodigoPessoa')->nullable()->default(0);

            $table->index(['IsDeletado'], 'Filtro2');
            $table->index(['Codigo', 'CodigoRevenda', 'DataCadastro', 'IsDeletado', 'IsFinalizado', 'UltimoAviso'], 'idx_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_tarefas');
    }
};
