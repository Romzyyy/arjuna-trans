  @extends('admin.pengaturan.navbarSetting')

  @section('navsetting')
      <div class="bg-primary text-white p-3 mb-4">
          <h4 class="m-0">Pengaturan Paket Layanan</h4>
      </div>

      <form>
          <div class="mb-3">
              <label for="judul" class="form-label">Judul Halaman*</label>
              <input type="text" class="form-control" id="judul" placeholder="Placeholder">
          </div>
          <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan Umum*</label>
              <textarea class="form-control" id="keterangan" rows="3" placeholder="Placeholder"></textarea>
          </div>
          <div class="row mb-3">
              <div class="col-md-4">
                  <label for="whatsapp" class="form-label">No. WhatsApp*</label>
                  <input type="text" class="form-control" id="whatsapp" placeholder="Placeholder">
              </div>
              <div class="col-md-4">
                  <label for="totalKendaraan" class="form-label">Total Kendaraan*</label>
                  <input type="text" class="form-control" id="totalKendaraan" placeholder="Placeholder">
              </div>
              <div class="col-md-4">
                  <label for="totalPelanggan" class="form-label">Total Pelanggan Terlayani*</label>
                  <input type="text" class="form-control" id="totalPelanggan" placeholder="Placeholder">
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-md-4">
                  <label for="gambar1" class="form-label">Gambar 1*</label>
                  <div class="input-group">
                      <input type="text" class="form-control" id="gambar1" placeholder="Placeholder">
                      <button class="btn btn-secondary" type="button">Upload</button>
                  </div>
              </div>
              <div class="col-md-4">
                  <label for="gambar2" class="form-label">Gambar 2*</label>
                  <div class="input-group">
                      <input type="text" class="form-control" id="gambar2" placeholder="Placeholder">
                      <button class="btn btn-secondary" type="button">Upload</button>
                  </div>
              </div>
              <div class="col-md-4">
                  <label for="gambar3" class="form-label">Gambar 3*</label>
                  <div class="input-group">
                      <input type="text" class="form-control" id="gambar3" placeholder="Placeholder">
                      <button class="btn btn-secondary" type="button">Upload</button>
                  </div>
              </div>
          </div>
          <div class="mt-4">
              <button type="button" class="btn btn-secondary me-2">BATALKAN</button>
              <button type="submit" class="btn btn-success">SIMPAN</button>
          </div>
      </form>
  @endsection()
