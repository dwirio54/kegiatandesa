@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <a href="" class="btn btn-secondary">Tambah Data Rakyat</a>
                    </div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-secondary">Simpan Data rakyat</button>
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
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Pekerjaan</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12314125</td>
                                    <td>Suwijo</td>
                                    <td>48</td>
                                    <td>Becak</td>
                                    <td>Menikah</td>
                                    <td>
                                        <form action="" method="post">
                                            <a href=""
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-secondary btn-sm">Hapus</button>
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