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
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('Id_Addresses');
            $table->char('ContactName', 250);
            $table->char('address', 10);
            $table->integer('PostalCode');
            $table->char('neighborhood', 150);
            $table->char('city',100);
            $table->char('state', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('phone', 10);
            $table->enum('type', ['Default','Usuario']);
            $table->char('status', 4);
            $table->unsignedBigInteger('User_Id')->unique();
            $table->foreign('User_Id')
                ->references('Id_User')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('addresses');
    }
};
