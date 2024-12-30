<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="container p-5">
    <a href="<?= base_url('laporan'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data Laporan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('laporan/update/' . $laporan['kode_penggajian']); ?>">
                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama</label>
                    <input type="text" value="<?= $laporan['nama']; ?>" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-form-label">Jabatan</label>
                    <input type="text" value="<?= $laporan['jabatan']; ?>" class="form-control" id="jabatan" name="jabatan">
                </div>
                <div class="form-group">
                    <label for="status_kepegawaian" class="col-form-label">Status Kepegawaian</label>
                    <input type="text" value="<?= $laporan['status_kepegawaian']; ?>" class="form-control" id="status_kepegawaian" name="status_kepegawaian">
                </div>
                <div class="form-group">
                    <label for="tanggal_gajian" class="col-form-label">Tanggal Gajian</label>
                    <input type="date" value="<?= $laporan['tanggal_gajian']; ?>" class="form-control" id="tanggal_gajian" name="tanggal_gajian">
                </div>
                <div class="form-group">
                    <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                    <input type="text" value="<?= $laporan['gaji_bersih']; ?>" class="form-control" id="gaji_bersih" name="gaji_bersih">
                </div>
                <div class="form-group">
                    <label for="kode_penggajian" class="col-form-label">Kode Penggajian</label>
                    <input type="text" value="<?= $laporan['kode_penggajian']; ?>" class="form-control" id="kode_penggajian" name="kode_penggajian">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
