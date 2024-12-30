<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="container p-5">
    <a href="<?= base_url('potongan'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data potongan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('potongan/update'); ?>">
                <div class="form-group">
                    <label for="kode_potongan" class="col-form-label">Kode Potongan</label>
                    <input type="text" value="<?= $potongan->kode_potongan; ?>" class="form-control" id="kode_potongan" name="kode_potongan">
                </div>
                <div class="form-group">
                    <label for="nama_potongan" class="col-form-label">Nama potongan</label>
                    <input type="text" value="<?= $potongan->nama_potongan; ?>" class="form-control" id="nama_potongan" name="nama_potongan">
                </div>
                <div class="form-group">
                    <label for="jumlah_potongan" class="col-form-label">Jumlah Potongan</label>
                    <input type="text" value="<?= $potongan->jumlah_potongan; ?>" class="form-control" id="jumlah_potongan" name="jumlah_potongan">
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