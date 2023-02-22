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
        Schema::create('web4_campanhas_destinatarios', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoOrigem')->nullable()->default(0);
            $table->enum('IsEnviado', ['S', 'N'])->nullable()->default('N');
            $table->string('Nome', 250)->nullable();
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
        Schema::dropIfExists('web4_campanhas_destinatarios');
    }
};
