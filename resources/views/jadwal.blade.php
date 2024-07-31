@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <h3 class="mb-4 text-center">
                    <img src="{{ asset('assets/icons/arjuna-trans1.png') }}" class="img-fluid w-25">
                    Arjuna Trans
                </h3>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-tachometer-alt"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-box"></i> Paket Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active"><i class="fas fa-calendar-alt"></i> Jadwal
                            Trip</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-video"></i> Short Video</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-comment"></i> Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fas fa-cog"></i> Pengaturan</a>
                    </li>
                </ul>
            </div>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Jadwal Trip</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-plus"></i> Jadwal Trip Baru
                        </button>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <!-- Trip card template -->
                    <div class="col">
                        <div class="card h-100">
                            <img src="image/Vector2.png" class="card-img-top" alt="Trip 1" />
                            <div class="card-body">
                                <h5 class="card-title">Nama Trip</h5>
                                <p class="card-text">
                                    12 - 15 Desember 2023
                                </p>
                                <p class="card-text">
                                    <strong>Rp 2.000.000 / Orang</strong>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">12 Seat</small>
                                </p>
                                <p class="card-text">
                                    Keterangan layanan text layanan text
                                    layanan text layanan text layanan text
                                    layanan text
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-success">
                                        <i class="fas fa-check"></i> Detail
                                    </button>
                                    <button class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the card template for other trips -->
                </div>
            </main>
        </div>
    </div>
@endsection
