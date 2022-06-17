<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel7 extends CI_Controller{
    public function export7_excel(){
        $this->load->model('Export7_model');
        $data['pendidikan'] = $this->Export7_model->listing();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'NIP');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('D1', 'SD');
        $object->getActiveSheet()->setCellValue('E1', 'SMP');
		$object->getActiveSheet()->setCellValue('F1', 'SMA');
		$object->getActiveSheet()->setCellValue('G1', 'D3');
		$object->getActiveSheet()->setCellValue('H1', 'S1');
		$object->getActiveSheet()->setCellValue('I1', 'S2');
		$object->getActiveSheet()->setCellValue('J1', 'Pendidikan Akhir');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['pendidikan'] as $pd) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $pd->nip);
            $object->getActiveSheet()->setCellValue('C'.$baris, $pd->nama);
            $object->getActiveSheet()->setCellValue('D'.$baris, $pd->SD);
            $object->getActiveSheet()->setCellValue('E'.$baris, $pd->SMP);
			$object->getActiveSheet()->setCellValue('F'.$baris, $pd->SMA);
			$object->getActiveSheet()->setCellValue('G'.$baris, $pd->D3);
			$object->getActiveSheet()->setCellValue('H'.$baris, $pd->S1);
			$object->getActiveSheet()->setCellValue('I'.$baris, $pd->S2);
			$object->getActiveSheet()->setCellValue('J'.$baris, $pd->pend_akhir);
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Pendidikan Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
