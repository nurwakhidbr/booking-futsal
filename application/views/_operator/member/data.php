<section class="section">
    <div class="section-header">
        <h1>Member</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Master Data</div>
            <div class="breadcrumb-item active"><a href="">Member</a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-success btn-flat" data-toggle="modal" data-target="#add-booking"><i class="fas fa-plus"></i> Member</button>
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
                                <th width="2%">#</th>
                                <th>Nama Member</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Nama Team</th>
                                <th>Kontak</th>
                                <th width="12%">Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($member as $tb_member) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tb_member->id_user ?></td>
                                        <td><?php echo $tb_member->jk ?></td>
                                        <td><?php echo $tb_member->alamat ?></td>
                                        <td><?php echo $tb_member->nama_tim ?></td>
                                        <td><?php echo $tb_member->kontak ?></td>
                                        <td>
                                            <a href="#" title="Bayar" class="btn btn-icon btn-sm btn-info"><i class="fas fa-hand-holding-usd"></i></a>
                                            <a href="<?php echo base_url(); ?>Member/hapus/<?php echo $tb_member->id_member ?>" title="Hapus" class="btn btn-icon btn-sm btn-danger float-right ml-2" onclick="javascript: return confirm('Anda yakin ingin menghapus data ini. ?');"><i class="fas fa-trash"></i></a>
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
                <form action="<?= base_url('member/add'); ?>" method="POST" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <div class="form-group">
                            <label for="nama">Nama Pemesan</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label> -->
                        <!-- <input type="text" name="nama" id="nama" class="form-control"> -->
                        <!-- <select name="nama_lapangan" id="nama_lapangan" class="form-control">
                                <option disabled selected>-- Pilih Tempat --</option>
                                <option value="Kenari">Kenari</option>
                                <option value="Champion">Champion</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="name">Nama Member</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control">
                                <option disabled selected>-- Jenis Kelamin --</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_tim">Nama Tim</label>
                            <input type="text" name="nama_tim" id="nama_tim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak Person</label>
                            <input type="text" name="kontak" id="kontak" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ktp">Upload KTP</label>
                            <input type="file" name="ktp" id="ktp" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>