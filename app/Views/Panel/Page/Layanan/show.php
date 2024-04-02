<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Detail Data</h4>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputName" name="name" value="<?= $item->nama ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNik" class="col-sm-3 col-form-label">Nik</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputNik" name="nik" value="<?= $item->nik ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputphone" class="col-sm-3 col-form-label">phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputphone" name="phone" value="<?= $item->phone ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="address" name="address" value="<?= $item->address ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjenislayanan" class="col-sm-3 col-form-label">Jenis Layanan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputjenislayanan" name="jenislayanan" value="<?= $item->jenis_layanan->nama ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputjenisurgensi" class="col-sm-3 col-form-label">Jenis Urgensi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputjenisurgensi" name="jenisurgensi" value="<?= $item->jenis_urgensi->nama ?>" readonly>
                    </div>
                </div>

                <!-- file persyaratan -->
                <div class="form-group row">
                    <label for="inputFilePersyaratan" class="col-sm-3 col-form-label">File Persyaratan</label>
                    <div class="col-sm-9">
                        <a href="<?= base_url('uploads/' . $item->file_persyaratan) ?>" target="_blank"><?= $item->file_persyaratan ?></a>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="<?= route_to('data.layanan') . "?tab=pending" ?>" class="btn btn-secondary">Back</a>
                        <?php if ($item->status == 'Pending') : ?>
                            <a href="<?= route_to('layanan.accept', $item->id) ?>" class="btn btn-success">On Progress</a>
                        <?php endif; ?>

                        <?php if ($item->status == 'InProgress') : ?>
                            <a href="<?= route_to('layanan.accept', $item->id) ?>" class="btn btn-success">Completed</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>