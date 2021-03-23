@extends('admin.layouts.master')
@section('title', 'Komisi')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Komisi</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Table Komisi</h4>
                        </div>
                        <div class="card-body card-body-table">
                            <div class="table-responsive">
                                <button type="button" id="btnKomisi" class="float-right ml-4 btn btn-outline-primary">Add Komisi
                                </button>
                                <table class="table table-custom table-striped w-100 table-hover" id="table-komisi">
                                    <thead>
                                        <tr>
                                            <th>Nama </th>
                                            <th>Fraksi</th>
                                            <th>Jabatan</th>
                                            <th>Komisi</th>
                                            <th>Tingkat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>James Smith</td>
                                            <td>Accountant</td>
                                            <td>Durham</td>
                                            <td>James Smith</td>
                                            <td>Accountant</td>
                                            <td>Durham</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- modal main -->
<div class="modal fade" id="modalInputKomisi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-komisi">
                    <div class="form-group">
                        <input type="hidden" class="form-control d-none" name="id" id="id">
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="namaSekolah">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control"
                            placeholder="Masukkan Nama Komisi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Fraksi</label>
                        <input type="text" id="fraksi" name="fraksi" class="form-control"
                            placeholder="Masukkan Fraksi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Jabatan</label>
                        <input type="text" id="jabatan" name="jabatan" class="form-control"
                            placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Komisi</label>
                        <input type="text" id="komisi" name="komisi" class="form-control"
                            placeholder="Masukkan Nama Komisi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Tingkat</label>
                        <input type="text" id="tingkat" name="tingkat" class="form-control"
                            placeholder="Masukkan Tingkat">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" id="tambah">Tambah</button>
                <button class="btn btn-primary d-none" type="button" id="update">Update</button>
                <button type="reset" class="btn btn-danger d-none">Reset</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">PERHATIAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Perhatian</b></p>
                <p>*data komisi hilang selamanya, apakah anda yakin?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus Data</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    @include('admin.akd.scriptkomisi')
@endsection
