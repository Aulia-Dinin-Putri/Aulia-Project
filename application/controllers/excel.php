<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel',$data);
    //  }

    public function export_excel()
    {
        $this->load->model('Export_model');
        $data['pegawai'] = $this->Export_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nip');
        $object->getActiveSheet()->setCellValue('C1', 'Npwp');
        $object->getActiveSheet()->setCellValue('D1', 'Nik');
        $object->getActiveSheet()->setCellValue('E1', 'Gelar Kesarjanaan');
        $object->getActiveSheet()->setCellValue('F1', 'Tempat');
        $object->getActiveSheet()->setCellValue('G1', 'Tanggal Lahir');
        $object->getActiveSheet()->setCellValue('H1', 'Nama');
        $object->getActiveSheet()->setCellValue('I1', 'Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('J1', 'Agama');
        $object->getActiveSheet()->setCellValue('K1', 'Pendidikan');
        $object->getActiveSheet()->setCellValue('L1', 'Status Kepegawaian');
        $object->getActiveSheet()->setCellValue('M1', 'Alamat');
        $object->getActiveSheet()->setCellValue('N1', 'No HP');
        $object->getActiveSheet()->setCellValue('O1', 'Email');
        $object->getActiveSheet()->setCellValue('P1', 'Status Kawin');
        $object->getActiveSheet()->setCellValue('Q1', 'Tanggal Pensiun');
        $object->getActiveSheet()->setCellValue('R1', 'No Karpeg');
        $object->getActiveSheet()->setCellValue('S1', 'No Taspen');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['pegawai'] as $peg) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $peg->nip);
            $object->getActiveSheet()->setCellValue('C'.$baris, $peg->npwp);
            $object->getActiveSheet()->setCellValue('D'.$baris, $peg->nik);
            $object->getActiveSheet()->setCellValue('E'.$baris, $peg->gelar_kesarjanaan);
            $object->getActiveSheet()->setCellValue('F'.$baris, $peg->tempat);
            $object->getActiveSheet()->setCellValue('G'.$baris, $peg->tgl_lahir);
            $object->getActiveSheet()->setCellValue('H'.$baris, $peg->nama);
            $object->getActiveSheet()->setCellValue('I'.$baris, $peg->jk);
            $object->getActiveSheet()->setCellValue('J'.$baris, $peg->agama);
            $object->getActiveSheet()->setCellValue('K'.$baris, $peg->pendidikan);
            $object->getActiveSheet()->setCellValue('L'.$baris, $peg->status_kep);
            $object->getActiveSheet()->setCellValue('M'.$baris, $peg->alamat);
            $object->getActiveSheet()->setCellValue('N'.$baris, $peg->no_hp);
            $object->getActiveSheet()->setCellValue('O'.$baris, $peg->email);
            $object->getActiveSheet()->setCellValue('P'.$baris, $peg->status_kawin);
            $object->getActiveSheet()->setCellValue('Q'.$baris, $peg->tgl_pensiun);
            $object->getActiveSheet()->setCellValue('R'.$baris, $peg->no_karpeg);
            $object->getActiveSheet()->setCellValue('S'.$baris, $peg->no_taspen);
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
