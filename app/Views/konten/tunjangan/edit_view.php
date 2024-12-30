<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="container p-5">
    <a href="<?= base_url('tunjangan'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data tunjangan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('tunjangan/update'); ?>">
                <div class="form-group">
                    <label for="kode_tunjangan" class="col-form-label">Kode tunjangan</label>
                    <input type="text" value="<?= $tunjangan->kode_tunjangan; ?>" class="form-control" id="kode_tunjangan" name="kode_tunjangan">
                </div>
                <div class="form-group">
                    <label for="nama_tunjangan" class="col-form-label">Nama tunjangan</label>
                    <input type="text" value="<?= $tunjangan->nama_tunjangan; ?>" class="form-control" id="nama_tunjangan" name="nama_tunjangan">
                </div>
                <div class="form-group">
                    <label for="jumlah_tunjangan" class="col-form-label">Jumlah tunjangan</label>
                    <input type="text" value="<?= $tunjangan->jumlah_tunjangan; ?>" class="form-control" id="jumlah_tunjangan" name="jumlah_tunjangan">
                </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>