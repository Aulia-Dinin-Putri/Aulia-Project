<?php
require_once('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel8 extends CI_Controller{
    public function export8_excel(){
        $this->load->model('Export8_model');
        $data['diklat_struktural'] = $this->Export8_model->listing();

        $spreadsheet = new Spreadsheet();
			$object = $spreadsheet;
    
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama Pegawai');
        $object->getActiveSheet()->setCellValue('C1', 'Diklat I');
        $object->getActiveSheet()->setCellValue('D1', 'Jam Diklat I');
        $object->getActiveSheet()->setCellValue('E1', 'Tanggal Diklat I');
		$object->getActiveSheet()->setCellValue('F1', 'Tahun Diklat I ');
		$object->getActiveSheet()->setCellValue('G1', 'Angkatan Diklat I');
		$object->getActiveSheet()->setCellValue('H1', 'No Diklat I');
		$object->getActiveSheet()->setCellValue('I1', 'Penyelenggara Diklat I');
		$object->getActiveSheet()->setCellValue('J1', 'Tempat Diklat I');
		$object->getActiveSheet()->setCellValue('K1', 'Diklat II');
        $object->getActiveSheet()->setCellValue('L1', 'Jam Diklat II');
        $object->getActiveSheet()->setCellValue('M1', 'Tanggal Diklat II');
		$object->getActiveSheet()->setCellValue('N1', 'Tahun Diklat II');
		$object->getActiveSheet()->setCellValue('O1', 'Angkatan Diklat II');
		$object->getActiveSheet()->setCellValue('P1', 'No Diklat II');
		$object->getActiveSheet()->setCellValue('Q1', 'Penyelenggara Diklat II');
		$object->getActiveSheet()->setCellValue('R1', 'Tempat Diklat II');
		$object->getActiveSheet()->setCellValue('S1', 'Diklat III');
        $object->getActiveSheet()->setCellValue('T1', 'Jam Diklat III');
        $object->getActiveSheet()->setCellValue('U1', 'Tanggal Diklat III');
		$object->getActiveSheet()->setCellValue('V1', 'Tahun Diklat III');
		$object->getActiveSheet()->setCellValue('W1', 'Angkatan Diklat III');
		$object->getActiveSheet()->setCellValue('X1', 'No Diklat III');
		$object->getActiveSheet()->setCellValue('Y1', 'Penyelenggara Diklat III');
		$object->getActiveSheet()->setCellValue('Z1', 'Tempat Diklat III');
		$object->getActiveSheet()->setCellValue('AA1', 'Diklat IV');
        $object->getActiveSheet()->setCellValue('AB1', 'Jam Diklat IV');
        $object->getActiveSheet()->setCellValue('AC1', 'Tanggal Diklat IV');
		$object->getActiveSheet()->setCellValue('AD1', 'Tahun Diklat IV');
		$object->getActiveSheet()->setCellValue('AE1', 'Angkatan Diklat IV');
		$object->getActiveSheet()->setCellValue('AF1', 'No Diklat IV');
		$object->getActiveSheet()->setCellValue('AG1', 'Penyelenggara Diklat IV');
		$object->getActiveSheet()->setCellValue('AH1', 'Tempat Diklat IV');
    
        $baris = 2;
        $no = 1;
    
        foreach ($data['diklat_struktural'] as $ds) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $ds->nama);
            $object->getActiveSheet()->setCellValue('C'.$baris, $ds->diklatI);
            $object->getActiveSheet()->setCellValue('D'.$baris, $ds->jam_diklatI);
            $object->getActiveSheet()->setCellValue('E'.$baris, $ds->tgl_diklatI);
			$object->getActiveSheet()->setCellValue('F'.$baris, $ds->tahun_diklatI);
			$object->getActiveSheet()->setCellValue('G'.$baris, $ds->angkatan_diklatI);
			$object->getActiveSheet()->setCellValue('H'.$baris, $ds->no_diklatI);
			$object->getActiveSheet()->setCellValue('I'.$baris, $ds->penyelenggara_diklatI);
			$object->getActiveSheet()->setCellValue('J'.$baris, $ds->tempat_diklatI);
			$object->getActiveSheet()->setCellValue('K'.$baris, $ds->diklatII);
            $object->getActiveSheet()->setCellValue('L'.$baris, $ds->jam_diklatII);
            $object->getActiveSheet()->setCellValue('M'.$baris, $ds->tgl_diklatII);
			$object->getActiveSheet()->setCellValue('N'.$baris, $ds->tahun_diklatII);
			$object->getActiveSheet()->setCellValue('O'.$baris, $ds->angkatan_diklatII);
			$object->getActiveSheet()->setCellValue('P'.$baris, $ds->no_diklatII);
			$object->getActiveSheet()->setCellValue('Q'.$baris, $ds->penyelenggara_diklatII);
			$object->getActiveSheet()->setCellValue('R'.$baris, $ds->tempat_diklatII);
			$object->getActiveSheet()->setCellValue('S'.$baris, $ds->diklatIII);
            $object->getActiveSheet()->setCellValue('T'.$baris, $ds->jam_diklatIII);
            $object->getActiveSheet()->setCellValue('U'.$baris, $ds->tgl_diklatIII);
			$object->getActiveSheet()->setCellValue('V'.$baris, $ds->tahun_diklatIII);
			$object->getActiveSheet()->setCellValue('W'.$baris, $ds->angkatan_diklatIII);
			$object->getActiveSheet()->setCellValue('X'.$baris, $ds->no_diklatIII);
			$object->getActiveSheet()->setCellValue('Y'.$baris, $ds->penyelenggara_diklatIII);
			$object->getActiveSheet()->setCellValue('Z'.$baris, $ds->tempat_diklatIII);
			$object->getActiveSheet()->setCellValue('AA'.$baris, $ds->diklatIV);
            $object->getActiveSheet()->setCellValue('AB'.$baris, $ds->jam_diklatIV);
            $object->getActiveSheet()->setCellValue('AC'.$baris, $ds->tgl_diklatIV);
			$object->getActiveSheet()->setCellValue('AD'.$baris, $ds->tahun_diklatIV);
			$object->getActiveSheet()->setCellValue('AE'.$baris, $ds->angkatan_diklatIV);
			$object->getActiveSheet()->setCellValue('AF'.$baris, $ds->no_diklatIV);
			$object->getActiveSheet()->setCellValue('AG'.$baris, $ds->penyelenggara_diklatIV);
			$object->getActiveSheet()->setCellValue('AH'.$baris, $ds->tempat_diklatIV);
			
            $baris++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Data Diklat Struktural Pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
