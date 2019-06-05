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
            $table->string('first_name', 30)->nullable();
            $table->string('last_name', 30)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role', 20);
            $table->string('photo')->default('storage/usrs/default.png');
            $table->text('biography')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
