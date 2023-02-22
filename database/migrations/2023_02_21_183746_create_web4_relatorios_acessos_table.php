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
        Schema::create('web4_relatorios_acessos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoAdministrador')->nullable()->default(0)->index('CodigoAdministrador');
            $table->integer('CodigoPagina')->nullable()->default(0)->index('CodigoPagina');
            $table->integer('QtdAcessos')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_relatorios_acessos');
    }
};
