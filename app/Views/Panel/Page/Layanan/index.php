<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Pengajuan Layanan</h1>
    <a href="<?= route_to("layanan.create") ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
</div>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link tab-link" data-bs-target="pending">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-link" data-bs-target="inprogress">InProgress</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-link" data-bs-target="completed">Completed</a>
            </li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered datatable" id="datatable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Nama</th>
                                <th>Jenis Layanan</th>
                                <th>Urgensi</th>
                                <th>Status</th>
                                <?php if ($inprogress == 0 and $completed == 0) : ?>
                                    <th>Bobot Total</th>
                                    <th>Prioritas</th>
                                <?php endif; ?>
                                <th>Tanggal Pengajuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($items as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->jenis_layanan->nama ?></td>
                                    <td><?= $row->jenis_urgensi->nama ?></td>
                                    <td><?= $row->status ?></td>
                                    <?php if ($inprogress == 0 and $completed == 0) : ?>
                                        <td><?= $row->bobot ?></td>
                                        <td><?= $row->rank ?></td>
                                    <?php endif; ?>
                                    <td><?= $row->created_at ?></td>
                                    <td>

                                        <a href="<?= route_to('layanan.show', $row->id) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="<?= route_to('layanan.accept', $row->id) ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i></a>
                                        <a href="<?= route_to('layanan.delete', $row->id) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>