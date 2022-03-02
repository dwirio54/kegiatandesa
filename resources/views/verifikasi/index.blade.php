@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="" class="btn btn-primary">Daftar Ulang</a>
                        <a href="" class="btn btn-secondary">Peserta</a>
                    </div>

                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-secondary">Cari Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kegiatan</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>TGL Daftar</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>KN20220302</td>
                                    <td>NISN Belum terisi</td>
                                    <td>Ferdy</td>
                                    <td>Menikah</td>
                                    <td>
                                        <span class="badge bg-secondary text-white">
                                            </td>
                                    </span>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection