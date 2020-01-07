<?php

class PdfController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->library('pdf');

        $data = array(
            "nama" => "Muhammad Fauzi Arda Saputra"
        );
        $this->pdf->filename = "testDomPdf.pdf";
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->load_view('filesToPdf/pdftohtml-htmltopdf',$data);
    }
}