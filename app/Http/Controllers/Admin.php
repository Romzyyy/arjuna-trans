<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function Admin()
    {
        return view("admin.dashboard");
    }

    public function Layanan()
    {
        return view("admin.layanan");
    }

    public function ShortVideo()
    {
        return view("admin.short");
    }

    public function Testimoni()
    {
        return view("admin.testimoni");
    }

    public function jadwal()
    {
        return view("admin.jadwal");
    }

    public function pengaturan()
    {
        return view("admin.pengaturan.pengaturan");
    }
    public function pengaturanHome()
    {
        return view("admin.pengaturan.pengaturanHome");
    }
    public function pengaturanJadwalTrips()
    {
        return view("admin.pengaturan.pengaturanJadwalTrips");
    }
    public function pengaturanPaketLayanan()
    {
        return view("admin.pengaturan.pengaturanPaketLayanan");
    }
    public function pengaturanShortVideo()
    {
        return view("admin.pengaturan.pengaturanShortVideo");
    }
    public function pengaturanTentangKami()
    {
        return view("admin.pengaturan.pengaturanTentangKami");
    }
    public function pengaturanTestimonials()
    {
        return view("admin.pengaturan.pengaturanTestimonials");
    }
}
