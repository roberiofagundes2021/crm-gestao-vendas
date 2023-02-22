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
        Schema::create('web4_tarefas_agendamentos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N');
            $table->integer('CodigoTarefa')->nullable()->default(0)->index('CodigoTarefa');
            $table->integer('CodigoResponsavel')->nullable()->default(0);
            $table->dateTime('DataCadastro')->nullable();
            $table->enum('IsExecutado', ['S', 'N'])->nullable()->default('N')->index('IsExecutado');
            $table->dateTime('DataExecutado')->nullable();
            $table->string('IPExecutado', 50)->nullable();
            $table->time('Hora')->nullable();
            $table->enum('IsAviso1', ['S', 'N'])->nullable()->default('N');
            $table->integer('ExecucaoMotivo')->nullable()->default(0);
            $table->string('Protocolo', 50)->nullable();

            $table->index(['CodigoTarefa', 'IsExecutado'], 'idx_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_tarefas_agendamentos');
    }
};
