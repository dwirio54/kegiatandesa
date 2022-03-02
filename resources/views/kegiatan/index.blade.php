@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"> Data Kegiatan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="" class="btn btn-success">Tambah Kegiatan</a>
                        <a href="" class="btn btn-success">Cetak semua data</a>
                    </div>
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="awal" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" name="akhir" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-success" type="submit">Cari Data</button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kegiatan</th>
                                    <th>Nama Kegiatan</th>
                                    <th>IDR</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>KD20220203</td>
                                    <td>Bersih Bersih Bersama</td>
                                    <td>10000</td>
                                    <td>Aktif</td>
                                    <td>2022-02-03</td>

                                    <td>
                                        <form action="" method="post">
                                            <a href=""
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <button type="submit" class=" btn btn-danger btn-sm">Hapus</button>
                                        </form>

                                    </td>
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