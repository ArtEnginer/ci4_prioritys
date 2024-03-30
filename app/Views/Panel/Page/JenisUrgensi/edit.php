<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Jenis Urgensi</h1>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-body">

                <form action="<?= route_to("jenis.urgensi.update", $item->id) ?>" method="post">

                    <div class="mb-3 row">
                        <label for="nama-urgensi" class="col-sm-3 col-form-label">Nama Urgensi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" id="nama-urgensi" value="<?= $item->nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bobot" class="col-sm-3 col-form-label">Bobot</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bobot" id="bobot" value="<?= $item->bobot ?>">
                        </div>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>