<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>
<div class="container pt-5">
    <div class="text-right">
    <?php if(in_groups('admin')) : ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    <?php endif;?>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Tunjangan</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode tunjangan</th>
                            <th>Nama tunjangan</th>
                            <th>Jumlah tunjangan</th>
                            <?php if(in_groups('admin')) : ?>
                            <th>aksi</th>
                            <?php endif;?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getTunjangan as $tunjangan) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $tunjangan['kode_tunjangan']; ?></td>
                                <td><?= $tunjangan['nama_tunjangan']; ?></td>
                                <td><?= format_rupiah($tunjangan['jumlah_tunjangan']); ?></td>
                                <?php if(in_groups('admin')) : ?>
                                <td>
                                    <a href="<?= base_url('tunjangan/edit/' . $tunjangan['kode_tunjangan']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit
                                    </a>
                                    <a href="<?= base_url('tunjangan/hapus/' . $tunjangan['kode_tunjangan']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data tunjangan?')" class="btn btn-danger">
                                        Hapus
                                    </a>
                                </td>
                                <?php endif;?>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data tunjangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('tunjangan/add'); ?>">
                    <div class="form-group">
                        <label for="kode_tunjangan" class="col-form-label">Kode tunjangan</label>
                        <input type="text" class="form-control" id="kode_tunjangan" name="kode_tunjangan">
                    </div>
                    <div class="form-group">
                        <label for="nama_tunjangan" class="col-form-label">Nama tunjangan</label>
                        <input type="text" class="form-control" id="nama_tunjangan" name="nama_tunjangan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tunjangan" class="col-form-label">Jumlah tunjangan</label>
                        <input type="text" class="form-control" id="jumlah_tunjangan" name="jumlah_tunjangan">
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
<?= $this->endSection() ?>