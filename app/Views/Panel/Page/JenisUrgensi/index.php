<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Jenis Urgensi</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
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
                                <th>Jenis Urgensi</th>
                                <th>Bobot</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($jenis_urgensi as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->bobot ?></td>
                                    <td>
                                        <a href="<?= route_to('jenis_urgensi_edit', $row->id) ?>" class=" btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?= route_to('jenis-urgensi-delete', $row->id) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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

<!-- Modal Add/Edit Data -->
<div class="modal fade" id="modalAddEdit" tabindex="-1" role="dialog" aria-labelledby="modalAddEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddEditLabel">Add/Edit Jenis Urgensi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= isset($edit) ? base_url('jenis_urgensi/update/' . $edit->id) : base_url('jenis_urgensi/add') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis">Jenis Urgensi</label>
                        <input type="text" class="form-control" id="jenis" name="jenis" value="<?= isset($edit) ? $edit->jenis : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot</label>
                        <input type="number" class="form-control" id="bobot" name="bobot" value="<?= isset($edit) ? $edit->bobot : '' ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><?= isset($edit) ? 'Edit' : 'Add' ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>