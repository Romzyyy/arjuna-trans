<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransLayananDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trans_Layanan_Detail', function(Blueprint $ladetail){
            $ladetail->id();
            $ladetail->unsignedBigInteger('id_layanan');
            $ladetail->integer('total_pelanggan');
            $ladetail->integer('total_pelanggan_terlayani');
            $ladetail->string('gambar1');
            $ladetail->string('gambar2');
            $ladetail->string('gambar3');

            $ladetail->foreign('id_layanan')->references('id')->on('Trans_Layanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Trans_Layanan_Detail', function (Blueprint $ladetail) {
            $ladetail->dropForeign(['id_layanan']);
        });

        Schema::dropIfExists('Trans_Layanan_Detail');
    }
}
