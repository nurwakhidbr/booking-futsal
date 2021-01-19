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
                                <th width="5%">No</th>
                                <th>Nama Tim</th>
                                <th>Lapangan</th>
                                <th>Tanggal</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th width="12%">Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($booking as $tb_booking) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tb_booking->nama_tim ?></td>
                                        <td><?php echo $tb_booking->id_lapangan ?></td>
                                        <td><?php echo $tb_booking->tgl ?></td>
                                        <td><?php echo $tb_booking->jam_mulai ?></td>
                                        <td><?php echo $tb_booking->jam_selesai ?></td>
                                        <td><?php echo $tb_booking->id_harga ?></td>
                                        <td>
                                            <div class="badge badge-success"><?php echo $tb_booking->status ?></div>
                                        </td>
                                        <td>
                                            <a href="#" title="Bayar" class="btn btn-icon btn-sm btn-info"><i class="fas fa-hand-holding-usd"></i></a>
                                            <a href="<?php echo base_url(); ?>Booking/hapus/<?php echo $tb_booking->id_booking ?>" title="Hapus" class="btn btn-icon btn-sm btn-danger float-right ml-2" onclick="javascript: return confirm('Anda yakin ingin menghapus data ini. ?');"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="add-booking" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-booking" aria-hidden="true" data-backdrop="">
            <div class="modal-dialog modal-sm">
                <form action="<?= base_url('booking/add'); ?>" method="POST" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Booking</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama">Nama Pemesan</label>
                            <select name="name" id="name" class="form-control">
                                <option disabled selected>-- Pilih Pemesan --</option>
                                <?php foreach ($user as $u) : ?>
                                    <option value="<?= $u->id ?>"><?= $u->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <select name="nama_lapangan" id="nama_lapangan" class="form-control">
                                <option disabled selected>-- Pilih Tempat --</option>
                                <?php foreach ($field as $f) : ?>
                                    <option value="<?= $f->id_lapangan ?>"><?= $f->nama_lapangan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tim">Nama Tim</label>
                            <input type="text" name="nama_tim" id="nama_tim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" name="tgl" id="tgl" class="form-control" value="<?= date('d-m-Y') ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="start">Mulai</label>
                                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="finish">Selesai</label>
                                    <input type="time" name="jam_selesai" id="jam_selesai" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>