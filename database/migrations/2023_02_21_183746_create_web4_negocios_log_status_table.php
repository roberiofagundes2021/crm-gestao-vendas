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
        Schema::create('web4_negocios_log_status', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoNegocio')->nullable()->default(0)->index('CodigoNegocio');
            $table->string('OrigemTipo', 250)->nullable();
            $table->integer('OrigemCodigo')->nullable()->default(0);
            $table->dateTime('Data')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('NovoValor', 250)->nullable();
            $table->longText('Observacao')->nullable();

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
        Schema::dropIfExists('web4_negocios_log_status');
    }
};
