<?= $this->extend('templates/index') ?>
<?= $this->section('page-content') ?>

<div class="container p-5">
    <a href="<?= base_url('pegawai'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data Pegawai</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pegawai/update'); ?>">
            <div class="form-group">
                    <label for="kode_pegawai" class="col-form-label">Kode Pegawai</label>
                    <input type="text" value="<?= $pegawai->kode_pegawai; ?>" class="form-control" id="kode_pegawai" name="kode_pegawai">
                </div>
                <div class="form-group">
                    <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                    <input type="text" value="<?= $pegawai->nama_pegawai; ?>" class="form-control" id="nama_pegawai" name="nama_pegawai">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                    <input type="text" value="<?= $pegawai->tempat_lahir; ?>" class="form-control" id="tempat_lahir" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label for="agama" class="col-form-label">Agama</label>
                    <input type="text" value="<?= $pegawai->agama; ?>" class="form-control" id="agama" name="agama">
                </div>
                <div class="form-group">
                    <label for="pendidikan_terakhir" class="col-form-label">Pendidikan Terakhir</label>
                    <input type="text" value="<?= $pegawai->pendidikan_terakhir; ?>" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="">---Pilih Jenis Kelamin---</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tmt" class="col-form-label">TMT</label>
                    <input type="date" class="form-control" id="tmt" name="tmt">
                </div>
                <div class="form-group">
                    <label for="golongan" class="col-form-label">Golongan</label>
                    <input type="text" class="form-control" id="golongan" name="golongan">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="col-form-label">Jabatan</label>
                    <input type="text" value="<?= $pegawai->jabatan; ?>" class="form-control" id="jabatan" name="jabatan">
                </div>
                <div class="form-group">
                    <label for="status_kepegawaian" class="col-form-label">Status Pegawai</label>
                    <select class="form-control" id="status_kepegawaian" name="status_kepegawaian">
                        <option value="">---Pilih Status Pegawai---</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Non-Aktif">Non-Aktif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status_pernikahan" class="col-form-label">Status Pernikahan</label>
                    <select class="form-control" id="status_pernikahan" name="status_pernikahan">
                        <option value="">---Pilih Status Pernikahan---</option>
                        <option value="Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_anak" class="col-form-label">Jumlah Anak</label>
                    <input type="text" value="<?= $pegawai->jumlah_anak; ?>" class="form-control" id="jumlah_anak" name="jumlah_anak">
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-form-label">Alamat</label>
                    <input type="text" value="<?= $pegawai->alamat; ?>" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="gaji_pokok" class="col-form-label">Gaji Pokok</label>
                    <input type="text" value="<?= $pegawai->gaji_pokok; ?>" class="form-control" id="gaji_pokok" name="gaji_pokok">
                </div>
                <div class="form-group">
                    <label for="no_telepon" class="col-form-label">No. Telepon</label>
                    <input type="text" value="<?= $pegawai->no_telepon; ?>" class="form-control" id="no_telepon" name="no_telepon">
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