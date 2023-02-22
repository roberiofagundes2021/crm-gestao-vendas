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
        Schema::create('web4_revendas_logacessos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoRevenda')->nullable()->default(0)->index('CodigoOrigem');
            $table->dateTime('Data')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('Navegador', 250)->nullable();
            $table->string('OS', 250)->nullable();
            $table->string('Email', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_revendas_logacessos');
    }
};
