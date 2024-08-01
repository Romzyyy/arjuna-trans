@extends('admin.pengaturan.navbarSetting')

@section('navsetting')
    <div class="card">
        <div class="card-header bg-primary text-white">
            Pengaturan Pengguna
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="username" class="form-label">Username *</label>
                        <input type="text" class="form-control" id="username" placeholder="Placeholder" />
                    </div>
                    <div class="col-md-4">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="password" placeholder="Placeholder" />
                    </div>
                    <div class="col-md-4">
                        <label for="ulangi-password" class="form-label">Ulangi Password *</label>
                        <input type="password" class="form-control" id="ulangi-password" placeholder="Placeholder" />
                    </div>
                </div>
                <div class="text-end">
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
@endsection()
