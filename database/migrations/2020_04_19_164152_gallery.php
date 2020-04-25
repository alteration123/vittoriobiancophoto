<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('gallery');

        Schema::create('gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->text('description');
            $table->timestamps();
        });

        Schema::dropIfExists('galleria');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery');
    }
}
