<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel42 extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export42_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel42',$data);
    //  }

    public function export42_excel()
    {
        $this->load->model('Export42_model');
        $data['pengangkatanpns'] = $this->Export42_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('C1', 'Tanggal');
        $object->getActiveSheet()->setCellValue('D1', 'Nomor Surat Keputusan');
        $object->getActiveSheet()->setCellValue('E1', 'Pejabat yang menetapkan');
        $object->getActiveSheet()->setCellValue('F1', 'Gapok Surat Keputusan');
        $object->getActiveSheet()->setCellValue('G1', 'Pangkat');
        $object->getActiveSheet()->setCellValue('H1', 'Golongan Ruang');
        $object->getActiveSheet()->setCellValue('I1', 'T.M.T PNS');
        $object->getActiveSheet()->setCellValue('J1', 'Tahun');
        $object->getActiveSheet()->setCellValue('K1', 'Bulan');
        $object->getActiveSheet()->setCellValue('L1', 'Suket Kesehatan');
        $object->getActiveSheet()->setCellValue('M1', 'STTPL');
        $object->getActiveSheet()->setCellValue('N1', 'Sumpah/Janji/PNS');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['pengangkatanpns'] as $pns) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $pns->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris, $pns->tgl_sk);
            $object->getActiveSheet()->setCellValue('D'.$baris, $pns->no_sk);
            $object->getActiveSheet()->setCellValue('E'.$baris, $pns->pejabat_ygmenetapkan);
            $object->getActiveSheet()->setCellValue('F'.$baris, $pns->gapok_sk);
            $object->getActiveSheet()->setCellValue('G'.$baris, $pns->pangkat_sk);
            $object->getActiveSheet()->setCellValue('H'.$baris, $pns->gol_ruang);
			$object->getActiveSheet()->setCellValue('I'.$baris, $pns->tmt_pns);
            $object->getActiveSheet()->setCellValue('J'.$baris, $pns->tahun);
            $object->getActiveSheet()->setCellValue('K'.$baris, $pns->bulan);
            $object->getActiveSheet()->setCellValue('L'.$baris, $pns->suket_kesehatan);
            $object->getActiveSheet()->setCellValue('M'.$baris, $pns->sttpl);
            $object->getActiveSheet()->setCellValue('N'.$baris, $pns->sumpah_janji_pns);
            
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Pengangkatan Pegawai PNS';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
