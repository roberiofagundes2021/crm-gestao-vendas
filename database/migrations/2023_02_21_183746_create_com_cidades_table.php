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
        Schema::create('com_cidades', function (Blueprint $table) {
            $table->comment('');
            $table->mediumIncrements('Codigo');
            $table->unsignedTinyInteger('CodigoEstado')->index('id_uf');
            $table->unsignedMediumInteger('CodigoIBGE')->default(0);
            $table->string('Estado', 100)->default('');
            $table->string('Nome', 100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_cidades');
    }
};
