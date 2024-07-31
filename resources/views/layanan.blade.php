@extends('layouts.adminSide')

@section('navcontent')
    <div class="col-md-10 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Paket Layanan</h2>
            <button class="btn btn-primary">
                <i class="fas fa-plus me-2"></i> Tambah Paket
                Layanan
            </button>
        </div>

        <div class="row">
            <!-- Repeat this card structure for each service package -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="image/bussatu.png" class="card-img-top" alt="Nama Layanan" />
                    <div class="card-body">
                        <h5 class="card-title">
                            Nama Layanan
                            <span class="badge bg-success">Aktif</span>
                        </h5>
                        <p class="card-text">
                            Keterangan layanan text, layanan text,
                            layanan text, layanan text...
                        </p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-outline-primary">
                                Detail
                            </button>
                            <button class="btn btn-sm btn-outline-secondary">
                                Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat card structure ends -->
        </div>
    </div>
@endsection()
