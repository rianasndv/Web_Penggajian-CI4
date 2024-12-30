<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Reporting</title>
    <style>
        p, span, table { font-size: 12px; }
        table { width: 100%; border: 1px solid #dee2e6; }
        table#tb-item tr th, table#tb-item tr td {
            border: 1px solid #000;
        }
        h4.justify {
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <h4 class="justify">Payroll Reporting</h4>
    <span>Kepada Yth.</span><br/><br/>
    <table cellpadding="0" id="kode_pegawai" name="kode_pegawai">
        <tr> 
            <th width="10%">Nama</th>
            <td width="50%">: <strong><?= isset($pegawai->nama_pegawai) ? $pegawai->nama_pegawai : 'N/A'; ?></strong></td>
            <th width="20%">Golongan</th>
            <td width="50%">: <strong><?= isset($pegawai->golongan) ? $pegawai->golongan : 'N/A'; ?></strong></td>
        </tr>
        <tr>
            <th width="10%">Alamat</th>
            <td width="50%">: <strong><?= isset($pegawai->alamat) ? $pegawai->alamat : 'N/A'; ?></strong></td>
            <th width="20%">Jabatan</th>
            <td width="50%">: <strong><?= isset($pegawai->jabatan) ? $pegawai->jabatan : 'N/A'; ?></strong></td>
        </tr>
        <tr>
            <th width="10%">Telp</th>
            <td width="50%">: <strong><?= isset($pegawai->no_telepon) ? $pegawai->no_telepon : 'N/A'; ?></strong></td>
            <th width="20%">Status</th>
            <td width="50%">: <strong><?= isset($pegawai->status_kepegawaian) ? $pegawai->status_kepegawaian : 'N/A'; ?></strong></td>
        </tr>
    </table>
    <table id="tb-item" cellpadding="4">
        <tr>
            <th width="20%"><strong>Gaji Pokok</strong></th>
            <th width="18%" style="text-align:rigth"><strong>Tunjangan</strong></th>
            <th width="15%" style="text-align:justify"><strong>Potongan</strong></th>
            <th width="25%" style="text-align:justify"><strong>Jumlah</strong></th>
        </tr>
        <tr>
            <td style="text-align:right">
                <?= 'Rp ' . number_format(isset($pegawai->gaji_pokok) ? $pegawai->gaji_pokok : 0, 0, ',', '.'); ?>
            </td>
            <td style="text-align:right">
                <?= 'Rp ' . number_format(isset($tunjangan->jumlah_tunjangan) ? $tunjangan->jumlah_tunjangan : 0, 0, ',', '.'); ?>
            </td>
            <td style="text-align:right">
                <?= 'Rp ' . number_format(isset($potongan->jumlah_potongan) ? $potongan->jumlah_potongan : 0, 0, ',', '.'); ?>
            </td>
            <td style="text-align:right">
                <strong><?= 'Rp ' . number_format(isset($penggajian->gaji_bersih) ? $penggajian->gaji_bersih : 0, 0, ',', '.'); ?></strong>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="border:1px solid #000"></td>
        </tr>
    </table>
    <table cellpadding="4" style="width: 100%">
        <tr>
            <td style="width: 50%; text-align: center; vertical-align: middle;">
                <p>&nbsp;</p>
            </td>
            <td style="width: 50%; text-align: center; vertical-align: middle;">
                <p>Bandar Lampung</p>
                <p>Hormat kami,</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>Tim Administrasi</p>
            </td>
        </tr>
    </table>
</body>
</html>