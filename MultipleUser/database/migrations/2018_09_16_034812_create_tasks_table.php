<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('taskname');
            $table->MediumText('taskdescription');
            $table->dateTime('taskduetime');
            $table->dateTime('self-markingopen');
            $table->dateTime('self-markingclose');
            $table->dateTime('peer-markingopen');
            $table->dateTime('peer-markingclose');
            $table->boolean('taskstatus');
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
        Schema::dropIfExists('tasks');
    }
}
