<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('owner_id')->unsigned();
            $table->bigInteger('caretaker_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('animal');
            $table->string('kind');
            $table->string('time');
            $table->date('date');
            $table->double('hourly_rate', 19, 2);
            $table->longText('description');
            $table->longText('image');
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
        Schema::dropIfExists('animal');
    }
}
