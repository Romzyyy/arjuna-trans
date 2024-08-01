@extends('admin.pengaturan.navbarSetting')

@section('navsetting')
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Pengaturan Jadwal Trip
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Halaman*</label>
                        <input type="text" class="form-control" id="judul" placeholder="Placeholder" />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="whatsapp" class="form-label">No. WhatsApp*</label>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Placeholder" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tanggal" class="form-label">Tampilkan Jadwal Trip*</label>
                            <input type="text" class="form-control" id="tanggal"
                                placeholder="Juni 2023 - Desember 2023" />
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="button" class="btn btn-secondary me-2">
                            BATALKAN
                        </button>
                        <button type="submit" class="btn btn-success">
                            SIMPAN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()
