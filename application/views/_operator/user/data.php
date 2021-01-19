<section class="section">
    <div class="section-header">
        <h1>User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Master Data</div>
            <div class="breadcrumb-item active"><a href="">User</a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
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
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th width="5%">Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $users) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $users->name ?></td>
                                        <td><?php echo $users->email ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>User/hapus/<?php echo $users->id ?>" title="Hapus" class="btn btn-icon btn-sm btn-danger float-right ml-2" onclick="javascript: return confirm('Anda yakin ingin menghapus data ini. ?');"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>