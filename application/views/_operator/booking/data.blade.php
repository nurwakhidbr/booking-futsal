@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Booking</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Master Data</div>
                <div class="breadcrumb-item active"><a href="">Booking</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-success btn-flat" data-toggle="modal" data-target="#add-booking"><i class="fas fa-plus"></i> Booking</button>
                            <button class="btn btn-info btn-flat dropdown-toggle" type="button" id="export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i> Export</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item has-icon">
                                    <i class="far fa-file-excel"></i> Excel
                                </a>
                                <a href="#" class="dropdown-item has-icon">
                                    <i class="far fa-file-pdf"></i> PDF
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th>Nama Pemesan</th>
                                    <th>Tempat</th>
                                    <th>Nama Tim</th>
                                    <th>Tgl</th>
                                    <th>Mulai</th>
                                    <th>Selesai</th>
                                    <th>Status</th>
                                    <th>#</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Wakhid</td>
                                        <td>Champions A</td>
                                        <td>Unisnu</td>
                                        <td>16/11/2020</td>
                                        <td>17.00</td>
                                        <td>18.00</td>
                                        <td><p class="badge badge-warning">Unpaid</p></td>
                                        <td>
                                            <a href="#" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="add-booking" class="modal">
                <div class="modal-dialog">
                    <form action="" method="POST" class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title">Tambah Booking</div>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection