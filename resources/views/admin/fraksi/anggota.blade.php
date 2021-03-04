@extends('admin.layouts.master')
@section('title', 'Anggota Fraksi')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>FRAKSI</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Table Anggota Fraksi</h4>
                        </div>
                        <div class="card-body card-body-table">
                            <div class="table-responsive">
                                <button type="button" id="btn-Fraksi" class="float-right ml-4 btn btn-outline-primary">Add Fraksi
                                </button>
                                <table class="table table-custom table-striped w-100 table-hover" id="table-anggota">
                                    <thead>
                                        <tr>
                                            <th>Nama Anggota</th>
                                            <th>Nama Fraksi</th>
                                            <!-- jabatan fraksi -->
                                            <th>Agama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Komisi</th>
                                            <!-- jabatan komisi -->
                                            <th>AKD</th>
                                            <!-- jabatan akd -->
                                            <th>Dapil</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>James Smith</td>
                                            <td>Accountant</td>
                                            <td>Durham</td>
                                            <td>Durham</td>
                                            <td>Durham</td>
                                            <td>Durham</td>
                                            <td>Durham</td>
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
<div class="modal fade" id="modalInputAnggota" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-fraksi">
                    <div class="form-group">
                        <input type="hidden" class="form-control d-none" name="id" id="id">
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="namaSekolah">Nama Anggota</label>
                        <input type="text" id="nama_anggota" name="nama_anggota" class="form-control"
                            placeholder="Masukkan Nama Anggota">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Nama Fraksi</label>
                        <input type="text" id="nama_fraksi" name="nama_fraksi" class="form-control"
                            placeholder="Masukkan Nama Fraksi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Agama</label>
                        <input type="text" id="agama" name="agama" class="form-control"
                            placeholder="Masukkan Agama">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Jenis Kelamin</label>
                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control"
                            placeholder="Masukkan Jenis Kelamin">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Jabatan Fraksi</label>
                        <input type="text" id="jabatan_fraksi" name="jabatan_fraksi" class="form-control"
                            placeholder="Masukkan Jabatan Fraksi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Komisi</label>
                        <input type="text" id="komisi" name="komisi" class="form-control"
                            placeholder="Masukkan Komisi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Jabatan Komisi</label>
                        <input type="text" id="jabatan_komisi" name="jabatan_komisi" class="form-control"
                            placeholder="Masukkan Jabatan komisi">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">AKD</label>
                        <input type="text" id="akd" name="akd" class="form-control"
                            placeholder="Masukkan AKD">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Jabatan AKD</label>
                        <input type="text" id="jabatan_akd" name="jabatan_akd" class="form-control"
                            placeholder="Masukkan Jabatan AKD">
                    </div>
                    <div class="form-group">
                        <label for="namaSekolah">Dapil</label>
                        <input type="text" id="dapil" name="dapil" class="form-control"
                            placeholder="Masukkan Dapil">
                    </div>
                    <div class="form-group">
                        <label for="logo">Upload Foto</label>
                        <div class="input-button" data-button="right">
                            <input type="file" class="form-control" readonly placeholder="Upload File"
                                name="foto" id="foto">
                            <input type="text" name="file" class="file" id="file_upload" hidden>
                            <span class="btn-addon">
                                <a href="#" id="browse_file">
                                    <i class="ti-folder text-muted"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Preview</label>
                        <div class="preview-container input-preview mt-0">
                            <img id="preview" class="img-fluid">
                        </div>
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
                <p><b>Jika menghapus Anggota maka</b></p>
                <p>*data pegawai tersebut hilang selamanya, apakah anda yakin?</p>
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
    @include('admin.fraksi.script_agt')
@endsection