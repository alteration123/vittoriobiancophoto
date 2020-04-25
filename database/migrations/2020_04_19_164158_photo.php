<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('photo');

        Schema::create('photo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('file')->unique();
            $table->text('description');
            $table->timestamps();
            $table->unsignedBigInteger('gallery_id');

            $table->foreign('gallery_id')->references('id')->on('gallery');
        });

        Schema::dropIfExists('foto');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo');
    }
}
