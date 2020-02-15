<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTitleDescsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuTitleDescs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('menu_id');
            //$table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->bigInteger('language_id');
            //$table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->string('alterText1');
            $table->string('alterText2');
            $table->boolean('active');
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
        Schema::dropIfExists('menuTitleDescs');
    }
}