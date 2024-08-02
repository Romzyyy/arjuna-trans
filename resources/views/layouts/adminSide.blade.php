@extends('layouts.main')

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3 class="mb-4 text-center">
                    <img src="{{ asset('assets/icons/arjuna-trans1.png') }}" class="img-fluid w-25">
                    Arjuna Trans
                </h3>
                <hr>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link {{ Request::is('/admin') ? 'active' : '' }}"><i
                                class="fas fa-home me-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="/paket-layanan" class="nav-link"><i class="fas fa-box me-2"></i>Paket Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="/jadwal" class="nav-link"><i class="fas fa-calendar me-2"></i>Jadwal
                            Trip</a>
                    </li>
                    <li class="nav-item">
                        <a href="/short-video" class="nav-link"><i class="fas fa-video me-2"></i>Short Video</a>
                    </li>
                    <li class="nav-item">
                        <a href="/testimoni" class="nav-link"><i class="fas fa-comment me-2"></i>Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a href="/pengaturan" class="nav-link"><i class="fas fa-cog me-2"></i>Pengaturan</a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            @yield('navcontent')
        </div>
    </div>
    <footer class="text-center mt-4">
        <p>Copyright © 2023 CV. Arjuna Sakti Sekuti</p>
    </footer>
</body>

</html>
