<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Profile</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?= base_url(); ?>/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
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

                    <!-- Page Inti -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
                    <form action="<?= base_url('profile/update') ?>" method="post">
                        <?= csrf_field() ?>

                        <h3 class="text-black">Informasi Personal</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama Pegawai:</td>
                                <td><input type="text" name="nama_pegawai" value="<?= isset($profile) ? $profile['nama_pegawai'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir:</td>
                                <td><input type="text" name="tempat_lahir" value="<?= isset($profile) ? $profile['tempat_lahir'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir:</td>
                                <td><input type="date" name="tanggal_lahir" value="<?= isset($profile) ? $profile['tanggal_lahir'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin:</td>
                                <td>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-laki" <?= (isset($profile) && $profile['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                                        <option value="Perempuan" <?= (isset($profile) && $profile['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Agama:</td>
                                <td><input type="text" name="agama" value="<?= isset($profile) ? $profile['agama'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Alamat:</td>
                                <td><textarea name="alamat" class="form-control"><?= isset($profile) ? $profile['alamat'] : '' ?></textarea></td>
                            </tr>
                            <tr>
                                <td>No. Telepon:</td>
                                <td><input type="text" name="no_telepon" value="<?= isset($profile) ? $profile['no_telepon'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Terakhir:</td>
                                <td><input type="text" name="pendidikan_terakhir" value="<?= isset($profile) ? $profile['pendidikan_terakhir'] : '' ?>" class="form-control"></td>
                            </tr>
                        </table>

                        <h3 class="text-black">Informasi Pekerjaan</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>TMT (Tanggal Mulai Tugas):</td>
                                <td><input type="date" name="tmt" value="<?= isset($profile) ? $profile['tmt'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Jabatan:</td>
                                <td><input type="text" name="jabatan" value="<?= isset($profile) ? $profile['jabatan'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Golongan:</td>
                                <td><input type="text" name="golongan" value="<?= isset($profile) ? $profile['golongan'] : '' ?>" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Status Kepegawaian:</td>
                                <td>
                                    <select name="status_kepegawaian" class="form-control">
                                        <option value="Aktif" <?= (isset($profile) && isset($profile['status_kepegawaian']) && $profile['status_kepegawaian'] == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
                                        <option value="Non-Aktif" <?= (isset($profile) && isset($profile['status_kepegawaian']) && $profile['status_kepegawaian'] == 'Non-Aktif') ? 'selected' : '' ?>>Non-Aktif</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Gaji Pokok:</td>
                                <td><input type="text" name="gaji_pokok" value="<?= isset($profile) ? $profile['gaji_pokok'] : '' ?>" class="form-control"></td>
                            </tr>
                        </table>

                        <h3 class="text-black">Informasi Keluarga</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>Status Pernikahan:</td>
                                <td>
                                    <select name="status_pernikahan" class="form-control">
                                        <option value="Belum Menikah" <?= (isset($profile) && $profile['status_pernikahan'] == 'Belum Menikah') ? 'selected' : '' ?>>Belum Menikah</option>
                                        <option value="Menikah" <?= (isset($profile) && $profile['status_pernikahan'] == 'Menikah') ? 'selected' : '' ?>>Menikah</option>
                                        <option value="Cerai" <?= (isset($profile) && $profile['status_pernikahan'] == 'Cerai') ? 'selected' : '' ?>>Cerai</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Anak:</td>
                                <td><input type="number" name="jumlah_anak" value="<?= isset($profile) ? $profile['jumlah_anak'] : '' ?>" class="form-control"></td>
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>

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