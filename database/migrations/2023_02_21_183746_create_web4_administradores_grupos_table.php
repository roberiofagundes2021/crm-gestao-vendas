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
        Schema::create('web4_administradores_grupos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoRevenda')->default(0);
            $table->enum('Status', ['A', 'D'])->nullable()->default('A');
            $table->enum('IsDeletado', ['S', 'N'])->nullable()->default('N');
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->string('Nome', 250)->nullable();
            $table->enum('IsTipo', ['S', 'G', 'R'])->nullable()->default('G');
            $table->enum('IsEditar', ['S', 'N'])->nullable()->default('S');
            $table->string('Tipo', 250)->nullable()->default('ADMINISTRADOR');

            $table->index(['IsDeletado', 'Status'], 'Filtro1');
            $table->index(['IsDeletado', 'Status'], 'Filtro2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_administradores_grupos');
    }
};
