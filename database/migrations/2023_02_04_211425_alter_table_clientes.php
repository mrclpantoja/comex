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
        schema::table('clientes', function (Blueprint $table) {
            $table->string('numero', 15)->nullable(true)->change();
            $table->string('complemento', 125)->nullable(true)->change();
            $table->string('bairro', 125)->nullable(true)->change();
            $table->string('cidade', 125)->nullable(true)->change();
            $table->string('estado', 125)->nullable(true)->change();
            $table->string('telefone', 15)->nullable(true)->change();
            $table->string('rua', 255)->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
