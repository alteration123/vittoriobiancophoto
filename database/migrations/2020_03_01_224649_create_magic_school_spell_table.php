<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagicSchoolSpellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magic_school_spell', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('magic_school_id')->unsigned();
            $table->bigInteger('spell_id')->unsigned();
            $table->foreign('magic_school_id')->references('id')->on('magic_schools');
            $table->foreign('spell_id')->references('id')->on('spells');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magic_school_spell');
    }
}
