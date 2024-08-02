@extends('layouts.adminSide')

@section('navcontent')
    <!-- Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Jadwal Trip</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#tambah_jadwal">
                    <i class="fas fa-plus"></i> Jadwal Trip Baru
                </button>
            </div>
        </div>

        <div class="modal fade" id="tambah_jadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header bg-trip">
                  <h1 class="modal-title fs-5 text-white" id="tambah_layanan">Tambah Trip</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="nama_trip" class="form-label">Nama Trip <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama_trip" aria-describedby="nama-trip" placeholder="Placeholder">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Upload Gambar Poster <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="gambar" placeholder="Pilih">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="kota_tujuan" class="form-label">Kota Tujuan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="kota_tujuan" aria-describedby="kota-tujuan" placeholder="Placeholder">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="wisata_tujuan" class="form-label">Destinasi Wisata Tujuan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="wisata_tujuan" placeholder="Placeholder">
                            </div>
                        </div>    

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="meeting_point" class="form-label">Meeting Ponit (Titik Pertemuan ) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="meeting_point" aria-describedby="meeting-point" placeholder="Placeholder">
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="tanggal_berangkat" aria-describedby="tanggal-berangkat">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="tanggal_pulang" class="form-label">Tanggal Pulang <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="tanggal_pulang">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="wisata_tujuan" class="form-label">Kendaraan yang Digunakan - (Sheet)<span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="nama_kendaraan" placeholder="Nama Kendaraan">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="sheet" value="0 Sheet">
                                    </div>
                                </div>
                            </div>
                            
                        </div>    
                    </form>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                  <button type="button" class="btn btn-success">Simpan</button>
                </div>
              </div>
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
