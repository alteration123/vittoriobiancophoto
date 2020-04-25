<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameGalleryPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photo', function (Blueprint $table) {
            $table->rename('photos');
        });

        Schema::table('gallery', function (Blueprint $table) {
            $table->rename('galleries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->rename('photo');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->rename('gallery');
        });
    }
}
