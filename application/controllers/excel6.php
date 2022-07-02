<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel6 extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export6_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel6',$data);
    //  }

    public function export6_excel()
    {
        $this->load->model('Export6_model');
        $data['penghargaan'] = $this->Export6_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('C1', 'Nomor SK Penghargaan');
        $object->getActiveSheet()->setCellValue('D1', 'Tanggal SK Penghargaan');
        $object->getActiveSheet()->setCellValue('E1', 'Asal SK Penghargaan');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['penghargaan'] as $pg) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $pg->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris, $pg->no_skpenghargaan);
            $object->getActiveSheet()->setCellValue('D'.$baris, $pg->tgl_skpenghargaan);
            $object->getActiveSheet()->setCellValue('E'.$baris, $pg->asal_skpenghargaan);
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Penghargaan Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
