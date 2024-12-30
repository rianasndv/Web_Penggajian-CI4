<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="container p-5">
    <a href="<?= base_url('penggajian'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data Penggajian</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('penggajian/update/' . $penggajian->kode_penggajian); ?>">
                <div class="form-group">
                    <label for="kode_penggajian" class="col-form-label">Kode Penggajian</label>
                    <input type="text" class="form-control" id="kode_penggajian" name="kode_penggajian" value="<?= $penggajian->kode_penggajian; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="kode_pegawai" class="col-form-label">Nama Pegawai</label>
                    <select class="form-control" id="kode_pegawai" name="kode_pegawai" required>
                        <?php foreach ($pegawai as $peg) : ?>
                            <option value="<?= $peg['kode_pegawai']; ?>" data-gaji="<?= $peg['gaji_pokok']; ?>" <?= $peg['kode_pegawai'] == $penggajian->kode_pegawai ? 'selected' : '' ?>>
                                <?= $peg['nama_pegawai']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_tunjangan" class="col-form-label">Nama Tunjangan</label>
                    <select class="form-control" id="kode_tunjangan" name="kode_tunjangan" required>
                        <?php foreach ($tunjangan as $tunj) : ?>
                            <option value="<?= $tunj['kode_tunjangan']; ?>" data-tunjangan="<?= $tunj['jumlah_tunjangan']; ?>" <?= $tunj['kode_tunjangan'] == $penggajian->kode_tunjangan ? 'selected' : '' ?>>
                                <?= $tunj['nama_tunjangan']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_potongan" class="col-form-label">Nama Potongan</label>
                    <select class="form-control" id="kode_potongan" name="kode_potongan" required>
                        <?php foreach ($potongan as $pot) : ?>
                            <option value="<?= $pot['kode_potongan']; ?>" data-potongan="<?= $pot['jumlah_potongan']; ?>" <?= $pot['kode_potongan'] == $penggajian->kode_potongan ? 'selected' : '' ?>>
                                <?= $pot['nama_potongan']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                    <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih" value="<?= $penggajian->gaji_bersih; ?>" required readonly>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        function calculateGajiBersih() {
            var gajiPokok = parseInt($('#kode_pegawai').find('option:selected').data('gaji')) || 0;
            var tunjangan = parseInt($('#kode_tunjangan').find('option:selected').data('tunjangan')) || 0;
            var potongan = parseInt($('#kode_potongan').find('option:selected').data('potongan')) || 0;

            var gajiBersih = gajiPokok + tunjangan - potongan;
            $('#gaji_bersih').val(gajiBersih);
        }

        $('#kode_pegawai, #kode_tunjangan, #kode_potongan').change(function() {
            calculateGajiBersih();
        });

        // Inisialisasi perhitungan saat halaman dimuat
        calculateGajiBersih();
    });
</script>

<?= $this->endSection() ?>