@extends('admin.layouts.master')
@section('title', 'Agenda')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Agenda</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Table Agenda DPRD</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <button type="button" id="btnAgenda" class="float-right ml-4 btn btn-outline-primary">Add Agenda</button>
                                <table class="table table-striped table-hover" id="table-agenda">
                                    <thead>
                                        <tr>
                                            <th>Nama Agenda</th>
                                            <th>Tempat</th>
                                            <th>Waktu</th>
                                            <th>Tanggal Pembuatan</th>
                                            <th>Tanggal Upload</th>
                                            <th>Peserta</th>
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
<div class="modal fade" id="modalInputAgenda" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-agenda">
                    <div class="form-group">
                        <input type="hidden" class="form-control d-none" name="id" id="id">
                    </div>
                    @csrf
                    <div class="form-group">
                        <label>Nama Agenda</label>
                        <input type="text" id="nama_agenda" name="nama_agenda" class="form-control"
                            placeholder="Masukkan Nama Agenda">
                    </div>
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" id="tempat" name="tempat" class="form-control"
                            placeholder="Masukkan Tempat">
                    </div>
                    <div class="form-group">
                        <label>Durasi</label>
                        <input type="text" id="durasi" name="durasi" class="form-control"
                        placeholder="Masukkan Durasi">
                    </div>
                    <div class="form-group">
                        <label>Peserta</label>
                        <input type="text" id="peserta" name="peserta" class="form-control"
                        placeholder="Masukkan Peserta">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Buat</label>
                        <input type="text" id="tanggal_buat" name="tanggal_buat" class="form-control datetimepicker">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Post</label>
                        <input type="text" id="tanggal_post" name="tanggal_post" class="form-control datetimepicker">
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
                <p><b>Jika menghapus Pegawai maka</b></p>
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
    @include('admin.agenda.script')
@endsection