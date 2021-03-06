<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->integer('owner')->default(0);
            $table->timestamps();
        });

        Schema::table('priorities', function($table) {
            $table->foreign('owner')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humors');
    }
}
