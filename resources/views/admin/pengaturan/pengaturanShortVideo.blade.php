  @extends('admin.pengaturan.navbarSetting')

  @section('navsetting')
      <div class="content">
          <div class="card">
              <div class="card-header bg-primary text-white">
                  Pengaturan Short Video
              </div>
              <div class="card-body">
                  <form>
                      <div class="mb-3">
                          <label for="judul" class="form-label">Judul Halaman*</label>
                          <input type="text" class="form-control" id="judul" placeholder="Placeholder" />
                      </div>
                      <div class="row">
                          <div class="col-md-4 mb-3">
                              <label for="youtube" class="form-label">Link Youtube*</label>
                              <input type="text" class="form-control" id="youtube" placeholder="Placeholder" />
                          </div>
                          <div class="col-md-4 mb-3">
                              <label for="instagram" class="form-label">Link Instagram*</label>
                              <input type="text" class="form-control" id="instagram" placeholder="Placeholder" />
                          </div>
                          <div class="col-md-4 mb-3">
                              <label for="tiktok" class="form-label">Link TikTok*</label>
                              <input type="text" class="form-control" id="tiktok" placeholder="Placeholder" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="facebook" class="form-label">Link Facebook*</label>
                              <input type="text" class="form-control" id="facebook" placeholder="Placeholder" />
                          </div>
                          <div class="col-md-6 mb-3">
                              <label for="tampilkan" class="form-label">Tampilkan Short Video*</label>
                              <input type="number" class="form-control" id="tampilkan" value="10" />
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
