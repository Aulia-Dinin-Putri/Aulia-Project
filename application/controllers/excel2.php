<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel2 extends CI_Controller
{

// // Load database
    //  public function __construct() {
    //  parent::__construct();
    //  $this->load->model("Export2_model");
    //  }

    // public function index() {
    //  $data = array( 'title' => 'Data user',
    //  'user' => $this->getAll->listing());
    //  $this->load->view('excel2',$data);
    //  }

    public function export2_excel()
    {
        $this->load->model('Export2_model');
        $data['kelpeg'] = $this->Export2_model->listing();
        // var_dump($data);die();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Ayah');
        $object->getActiveSheet()->setCellValue('D1', 'Tempat Ayah');
        $object->getActiveSheet()->setCellValue('E1', 'Tanggal Lahir Ayah');
        $object->getActiveSheet()->setCellValue('F1', 'Pekerjaan Ayah');
        $object->getActiveSheet()->setCellValue('G1', 'Nama Ibu');
        $object->getActiveSheet()->setCellValue('H1', 'Tempat Ibu');
        $object->getActiveSheet()->setCellValue('I1', 'Tanggal Lahir Ibu');
        $object->getActiveSheet()->setCellValue('J1', 'Pekerjaan Ibu');
        $object->getActiveSheet()->setCellValue('K1', 'Nama Istri/Suami');
        $object->getActiveSheet()->setCellValue('L1', 'Tempat Istri/Suami');
        $object->getActiveSheet()->setCellValue('M1', 'Tanggal Lahir Istri/Suami');
        $object->getActiveSheet()->setCellValue('N1', 'Tanggal Kawin');
        $object->getActiveSheet()->setCellValue('O1', 'Pendidikan Akhir Istri/Suami');
        $object->getActiveSheet()->setCellValue('P1', 'Pekerjaan Istri/Suami');
		$object->getActiveSheet()->setCellValue('Q1', 'Nip Istri/Suami');
		$object->getActiveSheet()->setCellValue('R1', 'Pangkat Istri/Suami');
		$object->getActiveSheet()->setCellValue('S1', 'No KK');
		$object->getActiveSheet()->setCellValue('T1', 'NIK Istri/Suami');
		$object->getActiveSheet()->setCellValue('U1', 'OPD');
		$object->getActiveSheet()->setCellValue('V1', 'Nama Anak-1');
		$object->getActiveSheet()->setCellValue('W1', 'Tempat Anak-1');
		$object->getActiveSheet()->setCellValue('X1', 'Tanggal Lahir Anak-1');
		$object->getActiveSheet()->setCellValue('Y1', 'Pekerjaan Anak-1');
		$object->getActiveSheet()->setCellValue('Z1', 'Status Anak-1');
		$object->getActiveSheet()->setCellValue('AA1', 'Pendidikan Anak-1');
		$object->getActiveSheet()->setCellValue('AB1', 'Jenis Kelamin Anak-1');
		$object->getActiveSheet()->setCellValue('AC1', 'Nama Anak-2');
		$object->getActiveSheet()->setCellValue('AD1', 'Tempat Anak-2');
		$object->getActiveSheet()->setCellValue('AE1', 'Tanggal Lahir Anak-2');
		$object->getActiveSheet()->setCellValue('AF1', 'Pekerjaan Anak-2');
		$object->getActiveSheet()->setCellValue('AG1', 'Status Anak-2');
		$object->getActiveSheet()->setCellValue('AH1', 'Pendidikan Anak-2');
		$object->getActiveSheet()->setCellValue('AI1', 'Jenis Kelamin Anak-2');
		$object->getActiveSheet()->setCellValue('AJ1', 'Nama Anak-3');
		$object->getActiveSheet()->setCellValue('AK1', 'Tempat Anak-3');
		$object->getActiveSheet()->setCellValue('AL1', 'Tanggal Lahir Anak-3');
		$object->getActiveSheet()->setCellValue('AM1', 'Pekerjaan Anak-3');
		$object->getActiveSheet()->setCellValue('AN1', 'Status Anak-3');
		$object->getActiveSheet()->setCellValue('AO1', 'Pendidikan Anak-3');
		$object->getActiveSheet()->setCellValue('AP1', 'Jenis Kelamin Anak-3');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['kelpeg'] as $kp) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $kp->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris, $kp->nama_ayah);
            $object->getActiveSheet()->setCellValue('D'.$baris, $kp->tempat_ayah);
            $object->getActiveSheet()->setCellValue('E'.$baris, $kp->tgllahir_ayah);
            $object->getActiveSheet()->setCellValue('F'.$baris, $kp->pekerjaan_ayah);
			$object->getActiveSheet()->setCellValue('G'.$baris, $kp->nama_ibu);
            $object->getActiveSheet()->setCellValue('H'.$baris, $kp->tempat_ibu);
            $object->getActiveSheet()->setCellValue('I'.$baris, $kp->tgllahir_ibu);
            $object->getActiveSheet()->setCellValue('J'.$baris, $kp->pekerjaan_ibu);
            $object->getActiveSheet()->setCellValue('K'.$baris, $kp->nama_is);
            $object->getActiveSheet()->setCellValue('L'.$baris, $kp->tempat_is);
            $object->getActiveSheet()->setCellValue('M'.$baris, $kp->tgllahir_is);
            $object->getActiveSheet()->setCellValue('N'.$baris, $kp->tgl_kawin);
            $object->getActiveSheet()->setCellValue('O'.$baris, $kp->pend_akhir);
            $object->getActiveSheet()->setCellValue('P'.$baris, $kp->pekerjaan_is);
            $object->getActiveSheet()->setCellValue('Q'.$baris, $kp->nip_is);
            $object->getActiveSheet()->setCellValue('R'.$baris, $kp->pangkat);
            $object->getActiveSheet()->setCellValue('S'.$baris, $kp->no_kk);
            $object->getActiveSheet()->setCellValue('T'.$baris, $kp->nik_is);
            $object->getActiveSheet()->setCellValue('U'.$baris, $kp->opd);
            $object->getActiveSheet()->setCellValue('V'.$baris, $kp->nama_anak1);
            $object->getActiveSheet()->setCellValue('W'.$baris, $kp->tempat_anak1);
            $object->getActiveSheet()->setCellValue('X'.$baris, $kp->tgllahir_anak1);
            $object->getActiveSheet()->setCellValue('Y'.$baris, $kp->pekerjaan_anak1);
            $object->getActiveSheet()->setCellValue('Z'.$baris, $kp->status_anak1);
            $object->getActiveSheet()->setCellValue('AA'.$baris, $kp->pend_anak1);
            $object->getActiveSheet()->setCellValue('AB'.$baris, $kp->jk_anak1);
			$object->getActiveSheet()->setCellValue('AC'.$baris, $kp->nama_anak2);
			$object->getActiveSheet()->setCellValue('AD'.$baris, $kp->tempat_anak2);
			$object->getActiveSheet()->setCellValue('AE'.$baris, $kp->tgllahir_anak2);
			$object->getActiveSheet()->setCellValue('AF'.$baris, $kp->pekerjaan_anak2);
			$object->getActiveSheet()->setCellValue('AG'.$baris, $kp->status_anak2);
			$object->getActiveSheet()->setCellValue('AH'.$baris, $kp->pend_anak2);
			$object->getActiveSheet()->setCellValue('AI'.$baris, $kp->jk_anak2);
			$object->getActiveSheet()->setCellValue('AJ'.$baris, $kp->nama_anak3);
			$object->getActiveSheet()->setCellValue('AK'.$baris, $kp->tempat_anak3);
			$object->getActiveSheet()->setCellValue('AL'.$baris, $kp->tgllahir_anak3);
			$object->getActiveSheet()->setCellValue('AM'.$baris, $kp->pekerjaan_anak3);
			$object->getActiveSheet()->setCellValue('AN'.$baris, $kp->status_anak3);
			$object->getActiveSheet()->setCellValue('AO'.$baris, $kp->pend_anak3);
			$object->getActiveSheet()->setCellValue('AP'.$baris, $kp->jk_anak3);
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Keluarga Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
