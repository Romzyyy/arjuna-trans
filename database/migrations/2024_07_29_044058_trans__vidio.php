<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransVidio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trans_Vidio', function(Blueprint $vidio){
            $vidio->id();
            $vidio->string('judul_halaman');
            $vidio->text('instagram');
            $vidio->text('tiktok');
            $vidio->text('facebook');
            $vidio->string('vidio_short');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trans_Vidio');
    }
}
