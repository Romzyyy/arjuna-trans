<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransTentang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trans_Tentang', function(Blueprint $tentang){
            $tentang->id();
            $tentang->string('sub_judul');
            $tentang->string('alamat');
            $tentang->string('no_tel');
            $tentang->string('no_wa');
            $tentang->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trans_Tentang');
    }
}
