<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Pengajuan Layanan</h1>
    <a href="<?= route_to("layanan.create") ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Nama User</th>
                                <th>Jenis Layanan</th>
                                <th>Urgensi</th>
                                <th>Status</th>
                                <th>Nilai Bobot</th>
                                <th>Prioritas</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($items as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->user_id ?></td>
                                    <td><?= $row->jenis_layanan->nama ?></td>
                                    <td><?= $row->jenis_urgensi->nama ?></td>
                                    <td><?= $row->status ?></td>
                                    <td><?= $row->nilai_bobot ?></td>
                                    <td><?= $row->priority ?></td>
                                    <td><?= $row->created_at ?></td>
                                    <td>
                                        <a href="<?= route_to('layanan.edit', $row->id) ?>" class=" btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
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