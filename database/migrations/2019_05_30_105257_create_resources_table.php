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
        Schema::create('productions', function (Blueprint $table) {
            $table->increments('pk_production');
            $table->string('type', 10);
            $table->string('title', 30);
            $table->string('photo');
            $table->string('code');
            $table->text('abstract');
            $table->string('pdf');
            $table->timestamps();
        });

        Schema::create('production_datasets', function (Blueprint $table) {
            $table->unsignedInteger('pk_dataset');
            $table->unsignedInteger('pk_production');
            $table->foreign('pk_dataset')
                ->references('pk_dataset')->on('datasets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('pk_production')
                ->references('pk_production')->on('productions')
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
        Schema::dropIfExists('productions');
        Schema::dropIfExists('production_datasets');
    }
}
