<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel5 extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export5_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel5',$data);
    //  }

    public function export5_excel()
    {
        $this->load->model('Export5_model');
        $data['jabatan'] = $this->Export5_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Jabatan');
        $object->getActiveSheet()->setCellValue('D1', 'Eselon');
        $object->getActiveSheet()->setCellValue('E1', 'TMT Jabatan');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['jabatan'] as $jab) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $jab->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris, $jab->nama_jabatan);
            $object->getActiveSheet()->setCellValue('D'.$baris, $jab->eselon);
            $object->getActiveSheet()->setCellValue('E'.$baris, $jab->tmt_jabatan);
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Jabatan Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
