<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sublines', function (Blueprint $table) {
            $table->increments('pk_subline');
            $table->string('name', 100)->unique();
            $table->text('description');
            $table->unsignedInteger('fk_line');
            $table->timestamps();
        });

        Schema::create('project_sublines', function (Blueprint $table) {
            $table->unsignedInteger('pk_project');
            $table->unsignedInteger('pk_subline');
            $table->foreign('pk_project')
                ->references('pk_project')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('pk_subline')
                ->references('pk_subline')->on('sublines')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('production_sublines', function (Blueprint $table) {
            $table->unsignedInteger('pk_production');
            $table->unsignedInteger('pk_subline');
            $table->foreign('pk_production')
                ->references('pk_production')->on('productions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('pk_subline')
                ->references('pk_subline')->on('sublines')
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
        Schema::dropIfExists('sub_lines');
        Schema::dropIfExists('project_sublines');
        Schema::dropIfExists('production_sublines');
    }
}
