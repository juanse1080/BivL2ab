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
            $table->increments('pk_project');
            $table->string('type');
            $table->text('title');
            $table->string('photo');
            $table->text('summary');
            $table->timestamps();
        });

        Schema::create('project_usr', function (Blueprint $table) {
            $table->unsignedInteger('pk_project');
            $table->unsignedInteger('pk_usr');
            $table->foreign('pk_project')
                ->references('pk_project')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('pk_usr')
                ->references('pk_usr')->on('usrs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('project_usr');
    }
}
