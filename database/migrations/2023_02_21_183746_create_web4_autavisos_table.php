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
        Schema::create('web4_autavisos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('Codigo', true);
            $table->string('Tipo', 250)->nullable();
            $table->dateTime('DataUltimoEnvio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web4_autavisos');
    }
};
