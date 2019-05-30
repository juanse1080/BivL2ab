<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 10);
            $table->string('title', 30);
            $table->string('photo');
            $table->text('Summary');
            $table->timestamps();
        });

        Schema::create('project_usr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 10);
            $table->string('title', 30);
            $table->string('photo');
            $table->text('Summary');
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
        Schema::dropIfExists('projects');
    }
}
