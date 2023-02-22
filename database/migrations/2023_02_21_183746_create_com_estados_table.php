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
        Schema::create('com_estados', function (Blueprint $table) {
            $table->comment('');
            $table->tinyIncrements('Codigo');
            $table->unsignedInteger('CodigoIBGE')->default(0);
            $table->char('Sigla', 2)->default('')->index('Sigla');
            $table->string('Nome', 50)->default('');
            $table->string('Regiao', 250)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('com_estados');
    }
};
