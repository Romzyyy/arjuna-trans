@extends('layouts.adminSide')

@section('navcontent')
    <!-- Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
