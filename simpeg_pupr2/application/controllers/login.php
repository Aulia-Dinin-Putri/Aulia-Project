<?php
class Login extends CI_controller{
	function __construct(){
		parent::__construct();	 
		$this->load->model('login_m');}
		
	public function index(){
		if(isset($_POST['login'])){
			$username=$this->input->post('username',true);
			$password=$this->input->post('password',true);
			$admin  = $this->login_m->admin($username,md5($password));
			$pegawai= $this->login_m->pegawai($username,md5($password));
			if($admin->num_rows() > 0 ){
				$DataAdmin=$admin->row_array();
				$sessionAdmin = array(
				'admin'    => TRUE,
				'id_admin' => $DataAdmin['id_admin'],'username' => $DataAdmin['username'],'password' => $DataAdmin['password'],
				'nama'     => $DataAdmin['nama'],'level'    => $DataAdmin['level'] );
				$this->session->set_userdata($sessionAdmin);
				$this->session->set_flashdata('pesan','<div class="btn btn-primary">Anda Berhasil Login .....</div>');
				redirect(base_url('admin/index'));
			}elseif($pegawai->num_rows() > 0){
				$DataPegawai=$pegawai->row_array();
				$sessionPegawai = array(
				'admin'    => TRUE,
				'id_pegawai'=> $DataPegawai['id_pegawai'],'username'  => $DataPegawai['username'],
				'password'  => $DataPegawai['password'],'nama'      => $DataPegawai['nama'],'level'     => 'pegawai',);	
				$this->session->set_userdata($sessionPegawai);
				$this->session->set_flashdata('pesan','<div class="btn btn-primary">Anda Berhasil Login .....</div>');
				redirect(base_url('admin/index'));
			}else{
				$this->session->set_flashdata('pesan','<div class="btn btn-danger"> Maaf Informasi Login Tidak Di Kenali <br />
       	                             Username Dan Password Salah</div>');
				redirect(base_url(''));}
		}else{
			$x = array('judul' =>'.:: Login Aplikasi ::.');
			$this->load->view('login',$x);}
   }
}
?>
