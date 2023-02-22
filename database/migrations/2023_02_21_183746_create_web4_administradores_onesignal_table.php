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
        Schema::create('web4_administradores_onesignal', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoAdministrador')->nullable()->default(0);
            $table->string('userId', 250)->nullable();
            $table->longText('Detalhes')->nullable();
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N');
            $table->dateTime('CadastroData')->nullable();
            $table->string('CadastroIP', 50)->nullable();
            $table->dateTime('DeletadoData')->nullable();
            $table->string('DeletadoIP', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_administradores_onesignal');
    }
};
