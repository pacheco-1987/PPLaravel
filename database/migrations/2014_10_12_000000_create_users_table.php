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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('Id_User');
            $table->string('name');
            $table->string('LastName');
            $table->string('company');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('phone', 10);
            $table->double('discount', 16,2);
            $table->string('BusinessName', 255);
            $table->char('CFDI', 100);
            $table->char('RFC', 100);
            $table->enum('type', ['Físico','Moral']);
            $table->enum('location', ['Bodega GDL','Bodega CDMX','Tienda']);
            $table->enum('role', ['Administrador','Vendedor','Mayorista','Coordinador de Almacen','Encargado de Facturacion']);
            $table->char('status',4);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
