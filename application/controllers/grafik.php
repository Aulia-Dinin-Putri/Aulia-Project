<?php
 class grafik extends CI_controller
{
	
	function __construct()
	{
	parent::__construct();
	if($this->session->userdata('admin') != TRUE){
     redirect(base_url(''));
     exit;
	};
	$this->load->model('chart_model');
	}
	
	public function banding_jk($value='')
	{
	 $x = array('judul' =>'Grafik Perbandingan Data Pegawai Berdasarkan Jenis Kelamin',
	             'data'=>$this->chart_model->jumlah_pegawai(),
	             'print'=>FALSE,);	
	 tpl('grafik/banding_jk',$x);	
	}

	public function banding_pendidikan($value='')
	{
	 $x = array('judul' =>'Grafik Perbandingan Data Pegawai Berdasarkan Pendidikan',
	             'data'=>$this->chart_model->pendidikan(),
	             'print'=>FALSE,);	
	 tpl('grafik/banding_pendidikan',$x);	
	}
}