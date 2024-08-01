@extends('admin.pengaturan.navbarSetting')

@section('navsetting')
    <div class="card">
        <div class="card-header bg-primary text-white">
            Pengaturan Testimonial
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Halaman *</label>
                    <input type="text" class="form-control" id="judul" placeholder="Placeholder" />
                </div>
                <div class="mb-3">
                    <label for="tampilkan" class="form-label">Tampilkan Testimoni *</label>
                    <input type="number" class="form-control" id="tampilkan" value="10" />
                </div>
                <div>
                    <button type="button" class="btn btn-secondary">
                        BATALKAN
                    </button>
                    <button type="submit" class="btn btn-success">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection()
