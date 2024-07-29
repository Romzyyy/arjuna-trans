<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trans_Home', function(Blueprint $home){
            $home->id();
            $home->string('travelNama');
            $home->string('slogan');
            $home->string('logo');
            $home->string('gambar');
            $home->string('no_wa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trans_Home');
    }
}
