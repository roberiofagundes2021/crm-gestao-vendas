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
        Schema::create('web4_informativos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->enum('Status', ['A', 'D'])->nullable()->default('A');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('Titulo', 250)->nullable();
            $table->longText('Texto')->nullable();
            $table->enum('IsTipo', ['L', 'C', 'V', 'AS', 'AI'])->nullable()->default('AS');
            $table->string('Link', 250)->nullable();
            $table->date('Data')->nullable();
            $table->string('Video', 250)->nullable();
            $table->string('FotoCapa', 250)->nullable();

            $table->index(['IsDeletado', 'Status'], 'Interna1');
            $table->index(['IsDeletado', 'Status'], 'IsDeletadoStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_informativos');
    }
};
