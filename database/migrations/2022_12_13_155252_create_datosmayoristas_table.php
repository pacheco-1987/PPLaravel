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
        Schema::create('datosmayoristas', function (Blueprint $table) {
            $table->string('nombre_mayorista');
            $table->string('company');
            $table->string('email')->unique();
            $table->char('phone', 10);
            $table->double('discount', 16,2);
            $table->string('nombre_contacto');
            $table->string('direccion');
            $table->string('CP');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('correo_electronico')->unique();
            $table->char('telefono', 10);
            $table->string('CFDI');
            $table->string('RFC');
            $table->string('razon_social');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datosmayoristas');
    }
};
