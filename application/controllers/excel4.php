<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel4 extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export4_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel4',$data);
    //  }

    public function export4_excel()
    {
        $this->load->model('Export4_model');
        $data['pengangkatancpns'] = $this->Export4_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('C1', 'Tanggal Persetujuan BAKN');
        $object->getActiveSheet()->setCellValue('D1', 'Nomor Nota Persetujuan BAKN');
        $object->getActiveSheet()->setCellValue('E1', 'Pejabat yang menetapkan');
        $object->getActiveSheet()->setCellValue('F1', 'Nomor SK CPNS');
        $object->getActiveSheet()->setCellValue('G1', 'Tanggal SK CPNS');
        $object->getActiveSheet()->setCellValue('H1', 'Gaji');
        $object->getActiveSheet()->setCellValue('I1', 'Ijazah');
        $object->getActiveSheet()->setCellValue('J1', 'Tahun Ijazah');
        $object->getActiveSheet()->setCellValue('K1', 'Golongan Ruang');
        $object->getActiveSheet()->setCellValue('L1', 'T.M.T CPNS');
        $object->getActiveSheet()->setCellValue('M1', 'Tahun');
        $object->getActiveSheet()->setCellValue('N1', 'Bulan');
        $object->getActiveSheet()->setCellValue('O1', 'Jabatan');
        $object->getActiveSheet()->setCellValue('P1', 'OPD');
        $object->getActiveSheet()->setCellValue('Q1', 'T.M.T SPMT');
        $object->getActiveSheet()->setCellValue('R1', 'Tahun + MK');
        $object->getActiveSheet()->setCellValue('S1', 'Bulan + MK');
		    
        $baris = 2;
        $no = 1;
    
        foreach ($data['pengangkatancpns'] as $cpns) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $cpns->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris, $cpns->tgl_persetujuan_bakn);
            $object->getActiveSheet()->setCellValue('D'.$baris, $cpns->no_nota_persetujuan_bakn);
            $object->getActiveSheet()->setCellValue('E'.$baris, $cpns->pejabat_ygmenetapkan);
            $object->getActiveSheet()->setCellValue('F'.$baris, $cpns->no_sk_cpns);
            $object->getActiveSheet()->setCellValue('G'.$baris, $cpns->tgl_sk_cpns);
			$object->getActiveSheet()->setCellValue('H'.$baris, $cpns->gaji);
            $object->getActiveSheet()->setCellValue('I'.$baris, $cpns->ijazah);
            $object->getActiveSheet()->setCellValue('J'.$baris, $cpns->ijazah_tahun);
            $object->getActiveSheet()->setCellValue('K'.$baris, $cpns->gol_ruang);
            $object->getActiveSheet()->setCellValue('L'.$baris, $cpns->tmt_cpns);
            $object->getActiveSheet()->setCellValue('M'.$baris, $cpns->tahun);
            $object->getActiveSheet()->setCellValue('N'.$baris, $cpns->bulan);
            $object->getActiveSheet()->setCellValue('O'.$baris, $cpns->jabatan);
            $object->getActiveSheet()->setCellValue('P'.$baris, $cpns->opd);
            $object->getActiveSheet()->setCellValue('Q'.$baris, $cpns->tmt_spmt);
            $object->getActiveSheet()->setCellValue('R'.$baris, $cpns->tahun_tambah_mk);
            $object->getActiveSheet()->setCellValue('S'.$baris, $cpns->bulan_tambah_mk);
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Pengangkatan Pegawai CPNS';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
