 @extends('admin.pengaturan.navbarSetting')

 @section('navsetting')
     <div class="bg-primary text-white p-3 mb-4">
         <h5>Pengaturan Tentang Kami</h5>
     </div>

     <form>
         <div class="mb-3">
             <label for="subJudul" class="form-label">Sub Judul *</label>
             <input type="text" class="form-control" id="subJudul" placeholder="Placeholder" />
         </div>
         <div class="mb-3">
             <label for="alamatLengkap" class="form-label">Alamat Lengkap *</label>
             <input type="text" class="form-control" id="alamatLengkap" placeholder="Placeholder" />
         </div>
         <div class="mb-3">
             <label class="form-label">Peta</label>
             <div id="map"
                 style="
                                    height: 300px;
                                    background-color: #e9ecef;
                                ">
             </div>
         </div>
         <div class="row">
             <div class="col-md-4 mb-3">
                 <label for="noTelepon" class="form-label">No. Telepon *</label>
                 <input type="tel" class="form-control" id="noTelepon" placeholder="Placeholder" />
             </div>
             <div class="col-md-4 mb-3">
                 <label for="noWhatsapp" class="form-label">No. Whatsapp *</label>
                 <input type="tel" class="form-control" id="noWhatsapp" placeholder="Placeholder" />
             </div>
             <div class="col-md-4 mb-3">
                 <label for="email" class="form-label">Email *</label>
                 <input type="email" class="form-control" id="email" placeholder="Placeholder" />
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
 @endsection()
