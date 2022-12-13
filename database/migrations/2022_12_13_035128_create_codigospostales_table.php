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
        Schema::create('codigospostales', function (Blueprint $table) {
            $table->integer('CCp');
            $table->char('CEstado', 10);
            $table->integer('CMunicipio');
            $table->integer('CLocalidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigospostales');
    }
};
