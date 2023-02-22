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
        Schema::create('web4_configuracoes', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('Nome', 250)->nullable()->index('Nome');
            $table->text('Valor')->nullable();
            $table->string('Tipo', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_configuracoes');
    }
};
