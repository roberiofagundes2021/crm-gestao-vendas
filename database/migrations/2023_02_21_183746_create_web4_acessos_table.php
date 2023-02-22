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
        Schema::create('web4_acessos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('Tipo', 50)->nullable();
            $table->integer('CodigoDerivado')->nullable()->default(0);
            $table->date('Data')->nullable();
            $table->integer('QtdAcessos')->nullable()->default(0);

            $table->index(['Tipo', 'CodigoDerivado'], 'CodigoDerivado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_acessos');
    }
};
