<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel3 extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export3_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel3',$data);
    //  }

    public function export3_excel()
    {
        $this->load->model('Export3_model');
        $data['gaji'] = $this->Export3_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nip');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('D1', 'Pejabat yang menetapkan');
        $object->getActiveSheet()->setCellValue('E1', 'Tanggal Surat');
		$object->getActiveSheet()->setCellValue('F1', 'Nomor');
        $object->getActiveSheet()->setCellValue('G1', 'Gaji Pokok');
        $object->getActiveSheet()->setCellValue('H1', 'T.M.T KGB');
        $object->getActiveSheet()->setCellValue('I1', 'Tahun');
        $object->getActiveSheet()->setCellValue('J1', 'Bulan');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['gaji'] as $pgj) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $pgj->nip);
            $object->getActiveSheet()->setCellValue('C'.$baris, $pgj->nama);
            $object->getActiveSheet()->setCellValue('D'.$baris, $pgj->pejabat_ygmenetapkan);
			$object->getActiveSheet()->setCellValue('E'.$baris, $pgj->tgl_surat);
            $object->getActiveSheet()->setCellValue('F'.$baris, $pgj->nomor);
            $object->getActiveSheet()->setCellValue('G'.$baris, $pgj->gaji_pokok);
            $object->getActiveSheet()->setCellValue('H'.$baris, $pgj->tmt_kgb);
			$object->getActiveSheet()->setCellValue('I'.$baris, $pgj->tahun);
            $object->getActiveSheet()->setCellValue('J'.$baris, $pgj->bulan);
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Penggajian Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
