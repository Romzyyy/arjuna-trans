@extends('layouts.adminSide')

@section('navcontent')
    <div class="col-md-10 content p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Pengaturan</h2>
            <div>
                <i class="fas fa-bell text-muted me-3"></i>
                <span class="text-muted">Nama Lengkap</span>
            </div>
        </div>

        <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a href="/pengaturan" class="nav-link {{ Request::is('/pengaturan') ? 'active' : '' }}">Pengguna</a>
            </li>
            <li class="nav-item">
                <a href="/pengaturan-home" class="nav-link {{ Request::is('/pengaturan-home') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="/pengaturan-paket-layanan"
                    class="nav-link {{ Request::is('/pengaturan-paket-layanan') ? 'active' : '' }}">Paket Layanan</a>
            </li>
            <li class="nav-item">
                <a href="/pengaturan-jadwal-trips"
                    class="nav-link {{ Request::is('/pengaturan-jadwal-trips') ? 'active' : '' }}">Jadwal Trip</a>
            </li>
            <li class="nav-item">
                <a href="/pengaturan-short-video"
                    class="nav-link {{ Request::is('/pengaturan-short-video') ? 'active' : '' }}">Short Video</a>
            </li>
            <li class="nav-item">
                <a href="/pengaturan-testimonials"
                    class="nav-link {{ Request::is('/pengaturan-testimonials') ? 'active' : '' }}">Testimonial</a>
            </li>
            <li class="nav-item">
                <a href="/pengaturan-tentang-kami"
                    class="nav-link {{ Request::is('/pengaturan-tentang-kami') ? 'active' : '' }}">Tentang Kami</a>
            </li>
        </ul>
        @yield('navsetting')
    </div>
@endsection()
