<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('pk_resource');
            $table->text('code');
            $table->text('introduction');
            $table->unsignedInteger('fk_production');
            $table->foreign('fk_production')
                ->references('pk_production')->on('productions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('dataset_resources', function (Blueprint $table) {
            $table->unsignedInteger('pk_dataset');
            $table->unsignedInteger('pk_resource');
            $table->foreign('pk_dataset')
                ->references('pk_dataset')->on('datasets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('pk_resource')
                ->references('pk_resource')->on('resources')
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
        Schema::dropIfExists('resources');
        Schema::dropIfExists('dataset_resources');
    }
}
