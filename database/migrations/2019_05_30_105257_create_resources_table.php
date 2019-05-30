<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->text('code');
            $table->text('introduction');
            $table->unsignedInteger('fk_production');
            $table->timestamps();
        });

        Schema::create('dataset_resources', function (Blueprint $table) {
            $table->unsignedInteger('fk_dataset');
            $table->unsignedInteger('fk_production');
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
