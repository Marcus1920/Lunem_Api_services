<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{

    public function up()
    {
        Schema::create('appointments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('location');
            $table->integer('notes');
            $table->datetime('start');
            $table->datetime('end');
            $table->datetime('reminder');
            $table->foreign('project_id')
                ->references('id')
                ->on('appointments');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('appointments');
    }
}
