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
        Schema::create('web4_tarefas_responsaveis', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoTarefa')->nullable()->default(0)->index('CodigoTarefa');
            $table->integer('CodigoResponsavel')->nullable()->default(0)->index('CodigoResponsavel');
            $table->integer('CodigoGrupoResponsavel')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_tarefas_responsaveis');
    }
};
