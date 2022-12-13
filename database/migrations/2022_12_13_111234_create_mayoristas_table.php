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
        Schema::create('mayoristas', function (Blueprint $table) {
            $table->bigIncrements('Id_User');
            $table->string('name');
            $table->string('company');
            $table->string('email')->unique();
            $table->char('phone', 10);
            $table->double('discount', 16,2);
            $table->string('total_cotizaciones');
            $table->string('total_ordenes');
            $table->char('status',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mayoristas');
    }
};
