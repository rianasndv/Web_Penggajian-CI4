<?php

namespace App\Controllers;

use App\Libraries\MY_TCPDF AS TCPDF;
use App\Models\Penggajian_model;
use App\Models\Pegawai_model;
use App\Models\Tunjangan_model;
use App\Models\Potongan_model;

class PdfController extends BaseController
{
    public function cetak($kode_penggajian)
    {
        $model = new Penggajian_model();
        $pegawaiModel = new Pegawai_model();
        $tunjanganModel = new Tunjangan_model();
        $potonganModel = new Potongan_model();

        log_message('debug', 'Before data retrieval');
        $data['penggajian'] = $model->getPenggajian($kode_penggajian);
        log_message('debug', 'After data retrieval');

        $data['pegawai'] = $pegawaiModel->getPegawai($data['penggajian']->kode_pegawai)->getRow();
        $data['tunjangan'] = $tunjanganModel->getTunjangan($data['penggajian']->kode_tunjangan)->getRow();
        $data['potongan'] = $potonganModel->getPotongan($data['penggajian']->kode_potongan)->getRow();
        
        // Load view file into $html variable
        $html = view('invoice', $data);

        // Create new TCPDF object
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('rianasndv_');
        $pdf->SetTitle('Slip Gaji');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, sobatcoding.com');

        // Set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Set font
        $pdf->SetFont('dejavusans', '', 14, '', true);

        // Add a page
        $pdf->AddPage();

        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        // Close and output PDF document
        $this->response->setContentType('application/pdf');
        $pdf->Output('slipgaji.pdf', 'I');
    }
}
