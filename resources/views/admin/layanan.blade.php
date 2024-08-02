@extends('layouts.adminSide')

@section('navcontent')
    <div class="col-md-10 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Paket Layanan</h2>
            <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#tambah_layanan">
                <i class="fas fa-plus me-2"></i> Tambah Paket
                Layanan
            </button>
        </div>

        <div class="modal fade" id="tambah_layanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-layanan">
                  <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Tambah Baru</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                          <label for="nama_layanan" class="form-label">Nama Layanan <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="nama_layanan" aria-describedby="nama-layanan" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Upload Gambar <span class="text-danger">*</span></label>
                          <input type="file" class="form-control" id="gambar" placeholder="Placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Placeholder"></textarea>
                          </div>
                      </form>
                </div>

                <div class="modal-footer">
                    <div class="row w-100">
                        <div class="col-6">
                            <button type="button" class="btn btn-primary w-100">Simpan</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </div>
                </div>  
                              
              </div>
            </div>
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
