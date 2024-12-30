<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="container pt-5">
    <!-- <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div> -->

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Laporan Bulanan</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status Kepegawaian</th>
                            <th>Tanggal Gajian</th>
                            <th>Gaji Bersih</th>
                            <th>Kode Penggajian</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($laporanBulanan as $laporan) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $laporan['nama']; ?></td>
                                <td><?= $laporan['jabatan']; ?></td>
                                <td><?= $laporan['status_kepegawaian']; ?></td>
                                <td><?= $laporan['tanggal_gajian']; ?></td>
                                <td><?= 'Rp ' . format_rupiah($laporan['gaji_bersih']); ?></td>
                                <td><?= $laporan['kode_penggajian']; ?></td>
                                <!-- <td>
                                    <a href="<?= base_url('laporan/edit/' . $laporan['kode_penggajian']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('laporan/hapus/' . $laporan['kode_penggajian']); ?>" onclick="javascript:return confirm('Hapus data laporan?')" class="btn btn-danger">
                                        Hapus
                                    </a>
                                </td> -->
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('laporan/add'); ?>">
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="status_kepegawaian" class="col-form-label">Status Kepegawaian</label>
                        <select class="form-control" id="status_kepegawaian" name="status_kepegawaian">
                            <option value="">---Pilih Status Kepegawaian---</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Non-aktif">Non Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_gajian" class="col-form-label">Tanggal Gajian</label>
                        <input type="date" class="form-control" id="tanggal_gajian" name="tanggal_gajian">
                    </div>
                    <div class="form-group">
                        <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                        <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih">
                    </div>
                    <div class="form-group">
                        <label for="kode_penggajian" class="col-form-label">Kode Penggajian</label>
                        <input type="text" class="form-control" id="kode_penggajian" name="kode_penggajian">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>

<script>
    $(document).ready(function () {
        $('#searchInput').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('#laporanTable tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<?= $this->endSection() ?>
