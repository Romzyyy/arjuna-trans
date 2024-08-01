@extends('layouts.adminSide')

@section('navcontent')
    <div class="col-md-10">
        <div class="container mt-4">
            <h2>Testimoni</h2>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <span>Show</span>
                    <select class="form-select d-inline-block w-auto mx-2">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                    <span>entries</span>
                </div>
                <button class="btn btn-primary">+ Buat Baru</button>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Testimoni</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>22-07-2022</td>
                        <td>Nama Lengkap</td>
                        <td>081234567890</td>
                        <td>Testimoninya</td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                Terima
                            </button>
                            <button class="btn btn-sm btn-danger">
                                Tolak
                            </button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection()
