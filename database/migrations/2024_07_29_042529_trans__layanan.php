<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransLayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trans_Layanan', function(Blueprint $layanan){
            $layanan->id();
            $layanan->string('judul');
            $layanan->string('keterangan');
            $layanan->string('no_wa', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trans_Layanan');
    }
}
