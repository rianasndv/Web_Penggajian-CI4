<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Reporting</title>
    <style>
        p, span, table { font-size: 12px; }
        table { width: 100%; border: 1px solid #dee2e6; border-collapse: collapse; }
        table#tb-item th, table#tb-item td {
            border: 1px solid #000;
            padding: 4px;
        }
        h4.justify {
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <h4 class="justify">Payroll Reporting</h4>
    <span>Kepada Yth.</span>
    <br/>
    <br/>
    <table id="kode_pegawai">
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
    <br/>
    <br/>
        <tr style="background-color:#a9a9a9">
            <th width="30%"><strong>Gaji Pokok</strong></th>
            <th width="18%"><strong>Tunjangan</strong></th>
            <th width="20%"><strong>Potongan</strong></th>
            <th width="25%"><strong>Gaji Bersih</strong></th>
        </tr>
        <tr>
            <td style="height: 20px">
                <?= 'Rp ' . number_format(isset($pegawai->gaji_pokok) ? $pegawai->gaji_pokok : 0, 0, ',', '.'); ?>
            </td>
            <td style="height: 20px">
                <?= 'Rp ' . number_format(isset($tunjangan->jumlah_tunjangan) ? $tunjangan->jumlah_tunjangan : 0, 0, ',', '.'); ?>
            </td>
            <td style="height: 20px">
                <?= 'Rp ' . number_format(isset($potongan->jumlah_potongan) ? $potongan->jumlah_potongan : 0, 0, ',', '.'); ?>
            </td>
            <td style="height: 20px">
                <strong><?= 'Rp ' . number_format(isset($penggajian->gaji_bersih) ? $penggajian->gaji_bersih : 0, 0, ',', '.'); ?></strong>
            </td>
        </tr>
        <tr style="border:1px solid #000">
        <td colspan="3"><strong>Total</strong></td>
        <td style="text-align:right"><strong><?= 'Rp ' . number_format(isset($penggajian->gaji_bersih) ? $penggajian->gaji_bersih : 0, 0, ',', '.'); ?></strong></td>
    </tr>
    </table>
    <table style="width: 100%">
        <tr>
            <td style="width: 50%; text-align: center;">
                <p>&nbsp;</p>
            </td>
            <td style="width: 50%; text-align: center;">
                <p>Bandar Lampung,
                    <?php $date=date_create("2024-06-23");
                    echo date_format($date, "d M Y");?></p>
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