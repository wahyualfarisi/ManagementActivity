<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('m_merk');
    $this->load->model('m_unitpegawai');
    $this->load->model('m_unitgedung');

    $this->load->library('pdf/fpdf');
    $this->load->library('MC_TABLE');
    //Codeigniter : Write Less Do More
  }
  function index()
  {
    $data['title'] = 'Print Laporans';
    $this->load->view('include/front/header_komputer', $data);

    $data['total_mersel']            = $this->m_unitpegawai->hitungKomMersel();
    $data['total_merut']             = $this->m_unitpegawai->hitungKomMerut();
    $data['total_all']               = $this->m_unitpegawai->hitungAllKom();
    $data['total_nonaktif']          = $this->m_unitpegawai->hitungKomTidakterpakai();

    
    $data['hitungGedung1Lantai2']      = $this->m_unitgedung->hitungGedung1Lantai2();

    $data['gedungmerut']  = $this->m_merk->getAllGedungMerut()->result();
    $data['gedungmersel'] = $this->m_merk->getAllGedungMersel()->result();
    $this->load->view('view_laporan', $data);
    $this->load->view('include/front/footer');
  }
  function printonegedung()
  {
      $pdf=new MC_Table("L","mm","legal");
      $pdf->SetMargins(1,1,1);
      $pdf->AliasNbPages();
      $pdf->AddPage();
      $pdf->SetFont('Arial','B',9);
      $pdf->Image(base_url('assets/images/logomiftah.png'),6,6,35,20);
      $pdf->SetX(40);
      $pdf->MultiCell(70.5,4.5,'PT. MIFTAH BAHTERA MANDIRI',0,'L');
      $pdf->SetFont('Helvetica','BI',7);
      $pdf->SetX(40);
      $pdf->MultiCell(50.5,4.5,'Ruko Anugrah 2 No.11 JL K.H Wakhid Hasyim, Tangerang Selatan',0,'L');
      $pdf->SetX(40);
      $pdf->MultiCell(50.5,4.5,'Phone/Fax : 021 7388 7080 ',0,'L');
      $pdf->SetX(40);
      $pdf->MultiCell(50.5,4.5,'Email : miftahpt@yahoo.com',0,'L');
      $pdf->SetX(40);
      $pdf->MultiCell(50.5,4.5, date("F j, Y").', MERDEKA SELATAN',0,'L');

      //------------------- GARIS ATAS -------->
          $pdf->Line(1,30.8,350.6,30.8);
          $pdf->SetLineWidth(0.1);

          $pdf->Line(1,31.8,350.6,31.8);
          $pdf->SetLineWidth(0);
      //------------------- GARIS ATAS -------->
      $pdf->ln(7);
      $pdf->SetFont('Arial','B',11);
      $pdf->Cell(0,0.7,$this->input->get('gedung'),0,1,'L');
      $pdf->ln(3);
      $pdf->setFillColor(128,128,128);
      $pdf->SetFont('Arial','B',8);
      $pdf->Cell(10.7, 15.7, 'NO', 1, 0, 'C');
      $pdf->Cell(52.0, 15.7, 'Ruangan', 1, 0, 'C');
      $pdf->Cell(35.1, 15.7, 'User', 1, 0, 'C');

      //HEPALA TABEL
      $posisi_x = $pdf->GetX();
      $pdf->cell(224.2,3.5,'Spesifikasi Komputer',1,0,'C');

      $pdf->cell(23.5,3.5,'Tanda Tangan',1,1,'C',1);

      $pdf->setX($posisi_x);
      $posisi_2 = $pdf->GetX();
      $pdf->cell(80.0,5.4,'CPU',1,0,'C', 1);
      $posisi_monitor = $pdf->GetX();
      $pdf->cell(20.4,5.4,'Monitor',1,0,'C', 1);
      $posisi_printer = $pdf->GetX();
      $pdf->cell(65.3,5.4,'Printer',1,0,'C',1);
      $posisi_scanner = $pdf->GetX();
      $pdf->cell(58.6,5.4,'Scanner',1,0,'C',1);

      $posisi_ttd = $pdf->GetX();
      $pdf->cell(23.5,5.4,'User','LR',1,'C',1);

      $pdf->setFillColor(230, 242, 85);
      $pdf->setX($posisi_2);
      $pdf->Cell(22.5, 6.8, 'Type/Merk', 1, 0, 'C',1);
      $pdf->Cell(25.7, 6.8, 'Inventaris', 1, 0, 'C',1);
      $pdf->Cell(10.9, 6.8, 'Thn', 1, 0, 'C',1);
      $pdf->Cell(10.9, 6.8, 'Ram', 1, 0, 'C',1);
      $pdf->Cell(10.9, 6.8, 'HDD', 1, 0, 'C',1);

      $pdf->setX($posisi_monitor);
      $pdf->Cell(20.4, 6.8, 'Type/Merk', 1, 0, 'C',1);
      //$pdf->Cell(2.7, 0.8, 'Inventaris', 1, 0, 'C');
      //$pdf->Cell(0.9, 0.8, 'Thn', 1, 0, 'C');

      //printer
      $pdf->setX($posisi_printer);
      $pdf->Cell(30.7, 6.8, 'Type/Merk', 1, 0, 'C',1);
      $pdf->Cell(25.7, 6.8, 'Inventaris', 1, 0, 'C',1);
      $pdf->Cell(9.9, 6.8, 'Thn', 1, 0, 'C',1);

      //scanner
      $pdf->setX($posisi_scanner);
      $pdf->Cell(22.0, 6.8, 'Type/Merk', 1, 0, 'C',1);
      $pdf->Cell(25.7, 6.8, 'Inventaris', 1, 0, 'C',1);
      $pdf->Cell(10.9, 6.8, 'Thn', 1, 0, 'C',1);

      $pdf->setX($posisi_ttd);
      $pdf->cell(23.5,6.8,' ',1,1,'C', 1);
      $pdf->SetFont('Arial','B',7);
      $no = 1;

      $get = $this->input->get('gedung');

      foreach($this->m_unitgedung->getUnitGedung($get)->result() as $key):
      $pdf->SetWidths(array(10.7,52.0,35.1,22.5,25.7,10.9,10.9,10,20.4,30.7,25.6,9,22.0,25.7,10.9,23.5));
          $pdf->Row(array(
                      array($no++),
                      array($key->nama_penempatan),
                      array($key->nama_depan.' '.$key->nama_belakang),
                      array($key->nama_brand.' '.$key->type_pc),
                      array($key->no_inventaris_pc),
                      array($key->thn_pc),
                      array($key->ram),
                      array($key->hardisk),
                      array($key->nama_brand_monitor.' '.$key->type_monitor),
                      array($key->nama_brand_printer.' '.$key->type_printer),
                      array($key->no_inventaris_printer),
                      array($key->thn_printer),
                      array($key->nama_brand_scanner),
                      array($key->no_inventaris_scanner),
                      array($key->thn_pc),
                      array($key->thn_scanner),
          ));

      endforeach;

      $pdf->output();
  }
  function printAllmersel()
  {
    $pdf=new MC_Table("L","mm","legal");
    $pdf->SetMargins(1,1,1);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',9);
    $pdf->Image(base_url('assets/images/logomiftah.png'),6,6,35,20);
    $pdf->SetX(40);
    $pdf->MultiCell(70.5,4.5,'PT. MIFTAH BAHTERA MANDIRI',0,'L');
    $pdf->SetFont('Helvetica','BI',7);
    $pdf->SetX(40);
    $pdf->MultiCell(50.5,4.5,'Ruko Anugrah 2 No.11 JL K.H Wakhid Hasyim, Tangerang Selatan',0,'L');
    $pdf->SetX(40);
    $pdf->MultiCell(50.5,4.5,'Phone/Fax : 021 7388 7080 ',0,'L');
    $pdf->SetX(40);
    $pdf->MultiCell(50.5,4.5,'Email : miftahpt@yahoo.com',0,'L');
    $pdf->SetX(40);
    $pdf->MultiCell(50.5,4.5, date("F j, Y").', MERDEKA SELATAN',0,'L');


    //------------------- GARIS ATAS -------->
        $pdf->Line(1,30.8,350.6,30.8);
        $pdf->SetLineWidth(0.1);

        $pdf->Line(1,31.8,350.6,31.8);
        $pdf->SetLineWidth(0);
    //------------------- GARIS ATAS -------->
    $pdf->ln(7);
    $pdf->SetFont('Arial','B',11);
    $pdf->Cell(0,0.7,'gedung',0,1,'L');
    $pdf->ln(3);
    $pdf->setFillColor(128,128,128);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(10.7, 15.7, 'NO', 1, 0, 'C');
    $pdf->Cell(52.0, 15.7, 'Ruangan', 1, 0, 'C');
    $pdf->Cell(35.1, 15.7, 'User', 1, 0, 'C');

    //HEPALA TABEL
    $posisi_x = $pdf->GetX();
    $pdf->cell(224.2,3.5,'Spesifikasi Komputer',1,0,'C');

    $pdf->cell(23.5,3.5,'Tanda Tangan',1,1,'C',1);

    $pdf->setX($posisi_x);
    $posisi_2 = $pdf->GetX();
    $pdf->cell(80.0,5.4,'CPU',1,0,'C', 1);
    $posisi_monitor = $pdf->GetX();
    $pdf->cell(20.4,5.4,'Monitor',1,0,'C', 1);
    $posisi_printer = $pdf->GetX();
    $pdf->cell(65.3,5.4,'Printer',1,0,'C',1);
    $posisi_scanner = $pdf->GetX();
    $pdf->cell(58.6,5.4,'Scanner',1,0,'C',1);

    $posisi_ttd = $pdf->GetX();
    $pdf->cell(23.5,5.4,'User','LR',1,'C',1);

    $pdf->setFillColor(230, 242, 85);
    $pdf->setX($posisi_2);
    $pdf->Cell(22.5, 6.8, 'Type/Merk', 1, 0, 'C',1);
    $pdf->Cell(25.7, 6.8, 'Inventaris', 1, 0, 'C',1);
    $pdf->Cell(10.9, 6.8, 'Thn', 1, 0, 'C',1);
    $pdf->Cell(10.9, 6.8, 'Ram', 1, 0, 'C',1);
    $pdf->Cell(10.9, 6.8, 'HDD', 1, 0, 'C',1);

    $pdf->setX($posisi_monitor);
    $pdf->Cell(20.4, 6.8, 'Type/Merk', 1, 0, 'C',1);
    //$pdf->Cell(2.7, 0.8, 'Inventaris', 1, 0, 'C');
    //$pdf->Cell(0.9, 0.8, 'Thn', 1, 0, 'C');

    //printer
    $pdf->setX($posisi_printer);
    $pdf->Cell(30.7, 6.8, 'Type/Merk', 1, 0, 'C',1);
    $pdf->Cell(25.7, 6.8, 'Inventaris', 1, 0, 'C',1);
    $pdf->Cell(9.9, 6.8, 'Thn', 1, 0, 'C',1);

    //scanner
    $pdf->setX($posisi_scanner);
    $pdf->Cell(22.0, 6.8, 'Type/Merk', 1, 0, 'C',1);
    $pdf->Cell(25.7, 6.8, 'Inventaris', 1, 0, 'C',1);
    $pdf->Cell(10.9, 6.8, 'Thn', 1, 0, 'C',1);

    $pdf->setX($posisi_ttd);
    $pdf->cell(23.5,6.8,' ',1,1,'C', 1);
    $pdf->SetFont('Arial','B',7);
    $no = 1;


    foreach($this->m_unitgedung->printAllgedungmersel()->result() as $key):
    $pdf->SetWidths(array(10.7,52.0,35.1,22.5,25.7,10.9,10.9,10,20.4,30.7,25.6,9,22.0,25.7,10.9,23.5));
        $pdf->Row(array(
                    array($no++),
                    array($key->nama_penempatan),
                    array($key->nama_depan.' '.$key->nama_belakang),
                    array($key->nama_brand.' '.$key->type_pc),
                    array($key->no_inventaris_pc),
                    array($key->thn_pc),
                    array($key->ram),
                    array($key->hardisk),
                    array($key->nama_brand_monitor.' '.$key->type_monitor),
                    array($key->nama_brand_printer.' '.$key->type_printer),
                    array($key->no_inventaris_printer),
                    array($key->thn_printer),
                    array($key->nama_brand_scanner),
                    array($key->no_inventaris_scanner),
                    array($key->thn_pc),
                    array($key->thn_scanner),
        ));

    endforeach;

    $pdf->output();
  }
}
