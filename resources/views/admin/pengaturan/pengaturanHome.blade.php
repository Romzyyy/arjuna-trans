@extends('admin.pengaturan.navbarSetting')

@section('navsetting')
    <div class="mt-3">
        <h4>Pengaturan Home</h4>
        <form>
            <div class="mb-3">
                <label for="namaTravel" class="form-label">Nama Travel *</label>
                <input type="text" class="form-control" id="namaTravel" required />
            </div>
            <div class="mb-3">
                <label for="slogan" class="form-label">Slogan *</label>
                <input type="text" class="form-control" id="slogan" required />
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="uploadLogo" class="form-label">Upload Logo *</label>
                    <input type="file" class="form-control" id="uploadLogo" required />
                </div>
                <div class="col-md-6 mb-3">
                    <label for="gambarHome" class="form-label">Gambar Home *</label>
                    <input type="file" class="form-control" id="gambarHome" required />
                </div>
            </div>
            <div class="mb-3">
                <label for="noWhatsapp" class="form-label">No. WhatsApp *</label>
                <input type="tel" class="form-control" id="noWhatsapp" required />
            </div>
            <div class="mt-3">
                <button type="button" class="btn btn-secondary me-2">
                    Batalkan
                </button>
                <button type="submit" class="btn btn-success">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection()
