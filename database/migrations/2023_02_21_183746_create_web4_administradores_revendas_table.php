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
        Schema::create('web4_administradores_revendas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->integer('CodigoAdministrador')->default(0)->index('CodigoAdministrador');
            $table->integer('CodigoRevenda')->nullable()->default(0)->index('CodigoRevenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_administradores_revendas');
    }
};
