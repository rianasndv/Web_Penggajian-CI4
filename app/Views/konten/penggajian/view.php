<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="card-body">
    <div class="table-responsive">
        <!-- Tombol Tambah Data -->
        <div class="text-right">
        <?php if(in_groups('admin')) : ?>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
        <?php endif; ?>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title" style="text-align: center;">Data Penggajian</h4>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Kode Penggajian</td>
                        <td>Nama Pegawai</td>
                        <td>Nama Tunjangan</td>
                        <td>Nama Potongan</td>
                        <td>Gaji Bersih</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($getPenggajian as $penggajian) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $penggajian['kode_penggajian']; ?></td>
                            <td><?= $penggajian['nama_pegawai']; ?></td>
                            <td><?= $penggajian['nama_tunjangan']; ?></td>
                            <td><?= $penggajian['nama_potongan']?></td>
                            <td><?= 'Rp ' . format_rupiah($penggajian['gaji_bersih']); ?></td>
                            <td>
                            <?php if(in_groups('admin')) : ?>
                                <a href="<?= base_url('penggajian/edit/' . $penggajian['kode_penggajian']); ?>" class="btn btn-success" penggajian-target="#editModal">
                                    Edit
                                </a>
                                <a href="<?= base_url('penggajian/hapus/' . $penggajian['kode_penggajian']); ?>" onclick="javascript:return confirm('Hapus Data Pegawai?')" class="btn btn-danger">
                                    Hapus
                                </a>
                            <?php endif; ?>
                                <a href="<?= base_url('pdf/cetak/' . $penggajian['kode_penggajian']); ?>" onclick="javascript:return confirm('Cetak Slip Gaji')" class="btn btn-primary">
                                    Slip Gaji
                                </a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambah Data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penggajian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('penggajian/add'); ?>">
                        <div class="form-group">
                            <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                            <select class="form-control" id="nama_pegawai" name="kode_pegawai" required>
                                <?php foreach ($pegawai as $peg) : ?>
                                    <option value="<?= $peg['kode_pegawai']; ?>" data-gaji="<?= $peg['gaji_pokok']; ?>"><?= $peg['nama_pegawai']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-chechk">
                            <label for="nama_tunjangan" class="col-form-label">Nama Tunjangan</label>
                            <select class="form-control" id="nama_tunjangan" name="kode_tunjangan" required>
                                <?php foreach ($tunjangan as $tunj) : ?>
                                    <option value="<?= $tunj['kode_tunjangan']; ?>" data-tunjangan="<?= $tunj['jumlah_tunjangan']; ?>"><?= $tunj['nama_tunjangan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_potongan" class="col-form-label">Nama Potongan</label>
                            <select class="form-control" id="nama_potongan" name="kode_potongan" required>
                                <?php foreach ($potongan as $pot) : ?>
                                    <option value="<?= $pot['kode_potongan']; ?>" data-potongan="<?= $pot['jumlah_potongan']; ?>"><?= $pot['nama_potongan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                            <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih" required readonly>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        function calculateGajiBersih() {
            var gajiPokok = parseInt($('#nama_pegawai').find('option:selected').data('gaji')) || 0;
            var tunjangan = parseInt($('#nama_tunjangan').find('option:selected').data('tunjangan')) || 0;
            var potongan = parseInt($('#nama_potongan').find('option:selected').data('potongan')) || 0;
            var gajiBersih = gajiPokok + tunjangan - potongan;
            $('#gaji_bersih').val(gajiBersih);
        }
        $('#nama_pegawai, #nama_tunjangan, #nama_potongan').change(function() {
            calculateGajiBersih();
        });
    });
</script>

<?= $this->endSection() ?>