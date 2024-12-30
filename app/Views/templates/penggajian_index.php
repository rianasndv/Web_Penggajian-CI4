<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penggajian</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('templates/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('templates/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Penggajian</h1>

                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Tombol Tambah Data -->
                            <div class="text-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
    </div>

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Kode Penggajian</td>
                                        <td>Kode Pegawai</td>
                                        <td>Kode Tunjangan</td>
                                        <td>Tunjangan Suami Istri</td>
                                        <td>Tunjangan Anak</td>
                                        <td>Tunjangan Jabatan</td>
                                        <td>Tunjangan Beras</td>
                                        <td>Tunjangan Kinerja</td>
                                        <td>Uang Makan</td>
                                        <td>Kode Potongan</td>
                                        <td>Potongan IWP</td>
                                        <td>Potongan PPH</td>
                                        <td>Bappetarum</td>
                                        <td>Sewa Rumah Dinas</td>
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
                                            <td><?= $penggajian['kode_pegawai']; ?></td>
                                            <td><?= $penggajian['kode_tunjangan']; ?></td>
                                            <td><?= $penggajian['tunjangan_istri_suami']; ?></td>
                                            <td><?= $penggajian['tunjangan_anak']; ?></td>
                                            <td><?= $penggajian['tunjangan_jabatan']; ?></td>
                                            <td><?= $penggajian['tunjangan_beras']; ?></td>
                                            <td><?= $penggajian['tunjangan_kinerja']; ?></td>
                                            <td><?= $penggajian['uang_makan']; ?></td>
                                            <td><?= $penggajian['kode_potongan']; ?></td>
                                            <td><?= $penggajian['pot_iwp']; ?></td>
                                            <td><?= $penggajian['pot_pph']; ?></td>
                                            <td><?= $penggajian['bappetarum']; ?></td>
                                            <td><?= $penggajian['sewa_rumah_dinas']; ?></td>
                                            <td><?= $penggajian['gaji_bersih']; ?></td>
                                            <td>
                                                <a href="<?= base_url('penggajian/edit/' . $penggajian['kode_penggajian']); ?>" class="btn btn-success" penggajian-target="#editModal">
                                                    Edit
                                                </a>
                                                <a href="<?= base_url('penggajian/hapus/' . $penggajian['kode_penggajian']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data pegawai?')" class="btn btn-danger">
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    

                    <!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data penggajian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('penggajian/add'); ?>">
                    <div class="form-group">
                        <label for="kode_penggajian" class="col-form-label">Kode Penggajian</label>
                        <input type="text" class="form-control" id="kode_penggajian" name="kode_penggajian">
                    </div>
                    <div class="form-group">
                        <label for="tunj_istri_suami" class="col-form-label">Tunjangan Suami Istri</label>
                        <input type="text" id="tunj_istri_suami" name="tunj_istri_suami">
                    </div>
                    <div class="form-group">
                        <label for="tunj_anak" class="col-form-label">Tunjangan Anak</label>
                        <input type="text" class="form-control" id="tunj_anak" name="tunj_anak">
                    </div>
                    <div class="form-group">
                        <label for="tunj_jabatan" class="col-form-label">Tunjangan Jabatan</label>
                        <input type="text" class="form-control" id="tunj_jabatan" name="tunj_jabatan">
                    </div>
                    <div class="form-group">
                        <label for="tunj_beras" class="col-form-label">Tunjangan Beras</label>
                        <input type="text" class="form-control" id="tunj_beras" name="tunj_beras">
                    </div>
                    <div class="form-group">
                        <label for="tukin" class="col-form-label">Tukin</label>
                        <input type="text" class="form-control" id="tukin" name="tukin">
                    </div>
                    <div class="form-group">
                        <label for="uang_makan" class="col-form-label">Uang Makan</label>
                        <input type="text" class="form-control" id="uang_makan" name="uang_makan">
                    </div>
                    <div class="form-group">
                        <label for="pot_rwp" class="col-form-label">Potongan Rwp</label>
                        <input type="text" class="form-control" id="pot_rwp" name="pot_rwp">
                    </div>
                    <div class="form-group">
                        <label for="pot_pph" class="col-form-label">Potongan Pph</label>
                        <input type="text" class="form-control" id="pot_pph" name="pot_pph">
                    </div>
                    <div class="form-group">
                        <label for="biapetarum" class="col-form-label">Biapetarum</label>
                        <input type="text" class="form-control" id="biapetarum" name="biapetarum">
                    </div>
                    <div class="form-group">
                        <label for="sewa_rmh_dinas" class="col-form-label">Sewa Rumah Dinas</label>
                        <input type="text" class="form-control" id="sewa_rmh_dinas" name="sewa_rmh_dinas">
                    </div>
                    <div class="form-group">
                        <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                        <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih">
                    </div>
                    <div class="form-group">
                        <label for="kode_pegawai" class="col-form-label">Kode Pegawai</label>
                        <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai">
                    </div>
                    <div class="form-group">
                        <label for="kode_tunjangan" class="col-form-label">Kode Tunjangan</label>
                        <input type="text" class="form-control" id="kode_tunjangan" name="kode_tunjangan">
                    </div>
                    <div class="form-group">
                        <label for="kode_potongan" class="col-form-label">Kode Potongan</label>
                        <input type="text" class="form-control" id="kode_potongan" name="kode_potongan">
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
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>
