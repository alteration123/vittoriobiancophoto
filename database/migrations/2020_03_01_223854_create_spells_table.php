<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('level');
            $table->string('hint');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spells');
    }
}
