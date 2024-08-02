<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trans_Trip', function(Blueprint $trip){
            $trip->id();
            $trip->string('nama_trip');
            $trip->string('kota_tujuan');
            $trip->text('Destinasi_wisata');
            $trip->text('titik_pertemuan');
            $trip->date('tanggal_berangkat');
            $trip->date('tanggal_pulang');
            $trip->string('kendaraan');
            $trip->string('harga_dewasa');
            $trip->string('harga_anak');
            $trip->string('tempat_inap');
            $trip->text('fasilitas');
            $trip->text('syara_ketentuan');
            // $trip->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trans_Trip');
    }
}
