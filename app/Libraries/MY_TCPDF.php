<?php

namespace App\Libraries;

use TCPDF;

class MY_TCPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = ROOTPATH.'public/img/logogaji.png';
        /**
         * width : 50
         */
        $this->Image($image_file, '', '', 50);
        // Set font
        $this->SetFont('helvetica', 'B', 11);
        $this->SetX(70);
        $this->Cell(0, 2, 'rianasndv_', 0, 1, '', 0, '', 0);
        // Title
        $this->SetFont('helvetica', '', 9);
        $this->SetX(70);
        $this->Cell(0, 2, 'Bandar Lampung, Soekarno Hatta No. 22', 0, 1, '', 0, '', 0);
        $this->SetX(70);
        $this->Cell(0, 2, 'Telp. 0895 6258 44088', 0, 1, '', 0, '', 0);
        $this->SetX(70);
        $this->Cell(0, 2, 'https://www.instagram.com/rianasndv_/', 0, 1, '', 0, '', 0);
        
        // QRCODE,H : QR-CODE Best error correction
        $this->write2DBarcode('https://sobatcdoing.com', 'QRCODE,H', 0, 3, 20, 20, ['position' => 'R'], 'N');

        $style = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
        $this->Line(15, 25, 195, 25, $style);

    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}