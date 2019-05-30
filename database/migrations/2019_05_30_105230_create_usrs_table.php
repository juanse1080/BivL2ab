<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsrsTable extends Migration
{
    public function up()
    {
        Schema::create('usrs', function (Blueprint $table) {
            $table->increments('pk_usr');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->date('birthdate');
            $table->string('email', 80)->unique();
            $table->string('password');
            $table->string('role', 20);
            $table->string('photo');
            $table->text('biography');
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
        Schema::dropIfExists('usrs');
    }
}
