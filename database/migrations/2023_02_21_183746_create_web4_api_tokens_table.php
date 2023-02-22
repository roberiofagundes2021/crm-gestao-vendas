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
        Schema::create('web4_api_tokens', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->dateTime('DataCadastro')->nullable();
            $table->string('IP', 50)->nullable();
            $table->dateTime('DataExpira')->nullable();
            $table->string('OrigemTipo', 50)->nullable();
            $table->integer('OrigemCodigo')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_api_tokens');
    }
};
