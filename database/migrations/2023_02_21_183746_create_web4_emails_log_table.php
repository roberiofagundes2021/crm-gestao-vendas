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
        Schema::create('web4_emails_log', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('OrigemTipo', 250)->nullable();
            $table->integer('OrigemCodigo')->nullable()->default(0);
            $table->dateTime('Data')->nullable();
            $table->string('IP', 50)->nullable();
            $table->longText('EmailPara')->nullable();
            $table->string('Assunto', 500)->nullable();
            $table->string('Protocolo', 500)->nullable();
            $table->string('PastaSep', 500)->nullable();
            $table->enum('IsAberto', ['S', 'N'])->nullable()->default('N');
            $table->dateTime('AbertoData')->nullable();
            $table->string('AbertoIP', 50)->nullable();
            $table->string('AbertoRefer', 500)->nullable();

            $table->index(['OrigemTipo', 'OrigemCodigo'], 'OrigemTipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_emails_log');
    }
};
