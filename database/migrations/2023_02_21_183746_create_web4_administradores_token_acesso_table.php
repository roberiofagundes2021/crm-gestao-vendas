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
        Schema::create('web4_administradores_token_acesso', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoAdministrador')->nullable()->default(0);
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_administradores_token_acesso');
    }
};
