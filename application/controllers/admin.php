<?php
 if ( ! defined('BASEPATH')) exit(header('Location:../'));
class Admin extends CI_controller
{
  function __construct()
  {
   parent:: __construct();
   // error_reporting(0);
    if($this->session->userdata('admin') != TRUE){
      redirect(base_url(''));
      exit;
    };
   $this->load->model('m_admin');
  }

  public function index()
  {
      $x = array('judul' =>'Halaman Administrator');
      tpl('admin/home',$x);
  }
  
  public function menu_pengangkatan()
  {
      $x = array('judul' =>'Menu Pengangkatan');
      tpl('admin/menu_pengangkatan',$x);
  }

  public function jabatan()
  {
   $x = array('judul' =>'Data Jabatan', 
              'data'=>$this->db->get('jabatan')->result_array()); 
   tpl('admin/jabatan/jabatan',$x);
  }

  public function jabatan_tambah()
  {
  $x = array('judul'        => 'Tambah Data Jabatan' ,
              'aksi'        => 'tambah',
              'nama'=> "",
			  'nama_jabatan'=> "",
              'eselon'    => "",
              'tmt_jabatan'   => ""); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nama'=>$this->input->post('nama'),
		'nama_jabatan'=>$this->input->post('nama_jabatan'),
        'eselon'    =>$this->input->post('eselon'),
        'tmt_jabatan'         =>$this->input->post('tmt_jabatan'));
      $cek=$this->db->insert('jabatan',$inputData);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/jabatan/jabatan'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/jabatan/jabatan_form',$x);
    }
  }
    
  public function jabatan_edit($id='')
  {
  $sql=$this->db->get_where('jabatan',array('id_jabatan'=>$id))->row_array(); 
  $x = array('judul'        =>'Tambah Data Jabatan' ,
              'aksi'        =>'tambah',
        'nama'=>$sql['nama'],
		'nama_jabatan'=>$sql['nama_jabatan'],
        'eselon'    =>$sql['eselon'],
        'tmt_jabatan'         =>$sql['tmt_jabatan']); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nama'=>$this->input->post('nama'),
		'nama_jabatan'=>$this->input->post('nama_jabatan'),
        'eselon'    =>$this->input->post('eselon'),
        'tmt_jabatan'         =>$this->input->post('tmt_jabatan'));
      $cek=$this->db->update('jabatan',$inputData,array('id_jabatan'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/jabatan_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/jabatan/jabatanread_form',$x);
    }
  }

  
  public function jabatan_hapus($id='')
  {
   $cek=$this->db->delete('jabatan',array('id_jabatan'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/jabatan/jabatan'));
   }
  }
  
  //tampilan user = function jabatan_read
  public function jabatan_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Detail Data Jabatan ::', 
              'data'=>$this->db->get_where('jabatan', array('id_admin' => $id))->result_array()); 
   tpl('admin/jabatan/jabatan_read',$x);
  }
 
  public function pegawai()
  {
   $x = array('judul' =>':: Data Pegawai ::', 
              'data'=>$this->db->get('pegawai')->result_array()); 
   tpl('admin/pegawai/pegawai',$x);
  }

  public function pegawai_hapus($id='')
  {
    $foto=$this->db->get_where('pegawai',array('id_pegawai'=>$id))->row_array();
    if($foto['foto'] != ""){ @unlink('template/data/'.$foto['foto']); }else{ }

    $cek=$this->db->delete('pegawai',array('id_pegawai'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pegawai/pegawai'));
   }
  }

//bagian gaji

public function gaji()
  {
   $x = array('judul' =>'Data Penggajian Pegawai', 
              'data'=>$this->db->get('penggajian')->result_array()); 
   tpl('admin/gaji/gaji',$x);
  }

public function gaji_tambah()
  {
  $x = array('judul'        => 'Tambah Data Penggajian' ,
              'aksi'        => 'tambah',
              'nip'=> "",
			  'nama'=> "",
			  'pejabat_ygmenetapkan'=> "",
              'nomor'    => "",
			  'tgl_surat'    => "",
			  'gaji_pokok'    => "",
			  'tmt_kgb'    => "",
			  'tahun'    => "",
              'bulan'   => ""); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
        'nomor'=>$this->input->post('nomor'),
		'tgl_surat'=>$this->input->post('tgl_surat'),
		'gaji_pokok'=>$this->input->post('gaji_pokok'),
		'tmt_kgb'=>$this->input->post('tmt_kgb'),
		'tahun'=>$this->input->post('tahun'),
        'bulan'         =>$this->input->post('bulan'));
      $cek=$this->db->insert('penggajian',$inputData);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/gaji/gaji'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/gaji/gaji_form',$x);
    }
  }
    
  public function gaji_edit($id='')
  {
  $sql=$this->db->get_where('penggajian',array('id_penggajian'=>$id))->row_array(); 
  $x = array('judul'        =>'Edit Data Penggajian' ,
              'aksi'        =>'tambah',
        'nip'=>$sql['nip'],
		'nama'=>$sql['nama'],
		'pejabat_ygmenetapkan'=>$sql['pejabat_ygmenetapkan'],
        'nomor'=>$sql['nomor'],
		'tgl_surat'=>$sql['tgl_surat'],
		'gaji_pokok'=>$sql['gaji_pokok'],
		'tmt_kgb'=>$sql['tmt_kgb'],
		'tahun'=>$sql['tahun'],
        'bulan'=>$sql['bulan']); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
		'nomor'=>$this->input->post('nomor'),
		'tgl_surat'=>$this->input->post('tgl_surat'),
		'gaji_pokok'=>$this->input->post('gaji_pokok'),
		'tmt_kgb'=>$this->input->post('tmt_kgb'),
        'tahun'    =>$this->input->post('tahun'),
        'bulan'         =>$this->input->post('bulan'));
      $cek=$this->db->update('penggajian',$inputData,array('id_penggajian'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/gaji/gaji'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/gaji/gaji_form',$x);
    }
  }

public function gaji_hapus($id='')
{
   $cek=$this->db->delete('penggajian',array('id_penggajian'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/gaji/gaji_pegawai'));
   }
}

//untuk menampilkan di level user = gaji_read
  public function gaji_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Data Penggajian Pegawai ::', 
              'data'=>$this->db->get_where('penggajian', array('id_admin'=>$id))->result_array()); 
   tpl('admin/gaji/gaji_read',$x);
  }


//bagian Login Administrais User..


public function user_admin($value='')
{
$x = array('judul' =>'Data Hak Akses',
            'data' =>$this->db->get('admin')); 
 tpl('admin/user_admin',$x);
}

public function user_admin_tambah()
{
if(isset($_POST['kirim'])){
 $data = array(
                'username' =>$this->input->post('username'),
                'password' =>md5($this->input->post('password')),
                'nama' =>$this->input->post('nama'),
                'level' =>$this->input->post('level'), );
 $cek =$this->db->insert('admin',$data);
 if($cek){
      $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Edit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/user_admin'));
 }else{
  buat_alert('SYSTEM ERROR');
 }
 
}else{
$x = array('judul' =>'Data Hak Akses',
           'username' =>'',
           'nama'     =>'',
           'data' =>$this->db->get('admin')); 
 tpl('admin/user_admin_form',$x);
}
}

public function user_admin_edit($id='')
{
$sql=$this->db->get_where('admin',array('id_admin'=>$id))->row_array();  
if(isset($_POST['kirim'])){
 $data = array(
                'username' =>$this->input->post('username'),
                'password' =>md5($this->input->post('password')),
                'nama' =>$this->input->post('nama'),
                'level' =>$this->input->post('level'),);
 $cek =$this->db->update('admin',$data,array('id_admin' =>$id));
 if($cek){
      $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Edit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/user_admin'));
 }else{
  buat_alert('SYSTEM ERROR');
 }
}else{
$x = array('judul' =>'Edit Data Hak Akses',
            'username' =>$sql['username'],
            'nama'     =>$sql['nama'],
            'data' =>$this->db->get('admin')); 
 tpl('admin/user_admin_form',$x);
}
}
public function user_admin_hapus($id='')
{
 if($this->session->userdata('id_admin') == $id){
  $pesan='<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
              Anda Tidak Bisa Menghapus Anda Sendiri.
              </div>';
 $this->session->set_flashdata('pesan',$pesan);
 redirect(base_url('admin/user_admin'));

 }else{ 
 $this->db->delete('admin',array('id_admin' =>$id));
  $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
 $this->session->set_flashdata('pesan',$pesan);
 redirect(base_url('admin/user_admin'));
}
}

public function profil()
{
 if (isset($_POST['kirim'])) {
     $data = array('password' => md5($this->input->post('password')),
                    'nama'    => $this->input->post('nama'), );
      $this->db->update('admin',$data,array('id_admin'=>$this->session->userdata('id_admin')));
      $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Edit Password Anda Adalah '.$this->input->post('password').' .
              </div>';
   $this->session->set_flashdata('pesan',$pesan);
   redirect(base_url('admin/profil'));   
  }else{
   $x = array('judul' =>'Ubah Password Administrator', 
               'data' =>$this->db->get_where('admin',array('id_admin'=>$this->session->userdata('id_admin')))->row_array(),
             );
   tpl('admin/ubah_password',$x);            
  } 

} 


public function proses()
  {
   $x = array('judul' =>'Data Penghargaan', 
              'data'=>$this->db->get('penghargaan')->result_array()); 
   tpl('admin/proses',$x);
  }

public function penghargaan()
  {
    $this->db->select('penghargaan.id_penghargaan, penghargaan.nama, penghargaan.no_skpenghargaan, penghargaan.tgl_skpenghargaan, penghargaan.asal_skpenghargaan, admin.nama AS nama_admin');
    $this->db->from('penghargaan');
    $this->db->join('admin', 'penghargaan.id_admin=admin.id_admin');
    $data_penghargaan = $this->db->get();

    $x = array(
      'judul' =>'Data Penghargaan', 
      'data' => $data_penghargaan->result_array()
    ); 
    tpl('admin/penghargaan/penghargaan',$x);
  }

  public function penghargaan_tambah()
  {
    $x = array(
      'judul'       => 'Tambah Data Penghargaan' ,
      'aksi'        => 'tambah',
      'nama'        => "",
      'no_skpenghargaan' => "",
      'tgl_skpenghargaan' => "",
      'asal_skpenghargaan' => "",
      'data_pegawai' => $this->db->query("SELECT * FROM admin WHERE level='user'")->result()
    ); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'id_admin' =>  $this->input->post('id_admin'),
        'no_skpenghargaan' => $this->input->post('no_skpenghargaan'),
        'tgl_skpenghargaan' => $this->input->post('tgl_skpenghargaan'),
        'asal_skpenghargaan' => $this->input->post('asal_skpenghargaan')
      );
      $cek = $this->db->insert('penghargaan',$inputData);
      if($cek){
        $pesan ='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
              Data Berhasil Di Ditambahkan.
              </div>';
        $this->session->set_flashdata('pesan',$pesan);
        redirect(base_url('admin/penghargaan'));
      }else{
        echo "ERROR input Data";
      }
    }else{
      tpl('admin/penghargaan/penghargaan_form',$x);
    }
  }

  public function penghargaan_tambah_user()
  {
    if (!$this->session->userdata('id_pegawai')) {
      $inputData=array(
        'id_admin' => $this->session->userdata('id_admin'),
        'nama' => $this->input->post('nama'),
        'no_skpenghargaan' => $this->input->post('no_skpenghargaan'),
        'tgl_skpenghargaan' => $this->input->post('tgl_skpenghargaan'),
        'asal_skpenghargaan' => $this->input->post('asal_skpenghargaan')
      );
    }else{
      $inputData=array(
        'id_pegawai' => $this->session->userdata('id_pegawai'),
        'id_admin' => $this->session->userdata('id_admin'),
        'nama' => $this->input->post('nama'),
        'no_skpenghargaan' => $this->input->post('no_skpenghargaan'),
        'tgl_skpenghargaan' => $this->input->post('tgl_skpenghargaan'),
        'asal_skpenghargaan' => $this->input->post('asal_skpenghargaan')
      );
    }
    $cek = $this->db->insert('penghargaan',$inputData);
    if($cek){
      $pesan ='<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Success!</h4>
             Data Berhasil Di Ditambahkan.
            </div>';
      $this->session->set_flashdata('pesan',$pesan);
      redirect(base_url('admin/penghargaan_read'));
    }else{
      echo "ERROR input Data";
    }
  }
  
  public function penghargaan_edit($id='')
  {
    // $sql = $this->db->get_where('penghargaan',array('id_penghargaan'=>$id))->row_array(); 

    $this->db->select('penghargaan.id_penghargaan, penghargaan.nama, penghargaan.no_skpenghargaan, penghargaan.tgl_skpenghargaan, penghargaan.asal_skpenghargaan, admin.nama AS nama_admin');
    $this->db->from('penghargaan');
    $this->db->where('penghargaan.id_penghargaan', $id);
    $this->db->join('admin', 'penghargaan.id_admin=admin.id_admin');
    $data = $this->db->get();
    $sql = $data->row_array();
    if ($sql['nama'] == "") {
      $nama = $sql['nama_admin'];
    }else{
      $nama = $sql['nama'];
    }
    $x = array(
      'judul'         =>'Tambah Data Penghargaan' ,
      'aksi'          =>'tambah',
		  'nama'          => $nama,
		  'no_skpenghargaan'=>$sql['no_skpenghargaan'],
      'tgl_skpenghargaan'    =>$sql['tgl_skpenghargaan'],
      'asal_skpenghargaan'         =>$sql['asal_skpenghargaan']
    ); 
    if(isset($_POST['kirim'])){
      $inputData=array(
		    'nama' => $this->input->post('nama'),
		    'no_skpenghargaan' => $this->input->post('no_skpenghargaan'),
        'tgl_skpenghargaan'    => $this->input->post('tgl_skpenghargaan'),
        'asal_skpenghargaan'         => $this->input->post('asal_skpenghargaan')
      );
      $cek=$this->db->update('penghargaan',$inputData,array('id_penghargaan'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
        $this->session->set_flashdata('pesan',$pesan);
        if ($this->session->userdata('level') == 'admin') {
          redirect(base_url('admin/penghargaan/penghargaan_read'));
        }else{
          redirect(base_url('admin/penghargaan_read'));
        }
        // redirect(base_url('admin/penghargaan/penghargaan_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
      tpl('admin/penghargaan/penghargaanread_form',$x);
    }
  }

  public function penghargaan_hapus($id='')
  {
   $cek=$this->db->delete('penghargaan',array('id_penghargaan'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    if ($this->session->userdata('level') == 'admin') {
      redirect(base_url('admin/penghargaan'));
    }else{
      redirect(base_url('admin/penghargaan_read'));
    }
   }
  }
  
  //untuk menampilkan di level user = penghargaan_read
  public function penghargaan_read()
  {
    $id = $this->session->userdata('id_admin');

    $this->db->select('penghargaan.id_penghargaan, penghargaan.nama, penghargaan.no_skpenghargaan, penghargaan.tgl_skpenghargaan, penghargaan.asal_skpenghargaan, admin.nama AS nama_admin');
    $this->db->from('penghargaan');
    $this->db->where('penghargaan.id_admin', $id);
    $this->db->join('admin', 'penghargaan.id_admin=admin.id_admin');
    $data_penghargaan = $this->db->get();

    $x = array(
      'judul' =>':: Data Penghargaan Pegawai ::', 
      'data'=> $data_penghargaan->result_array()); 
    tpl('admin/penghargaan/penghargaan_read',$x);
  }
  

public function pengangkatancpns()
  {
   $x = array('judul' =>'Data Pengangkatan CPNS', 
              'data'=>$this->db->get('pengangkatancpns')->result_array()); 
   tpl('admin/pengangkatan/pengangkatancpns',$x);
  }

  public function pengangkatancpns_tambah()
  {
    $x = array(
      'judul'        => 'Tambah Data Pengangkatan CPNS' ,
      'aksi'        => 'tambah',
      'tgl_persetujuan_bakn'=> "",
      'nama'=> "",
      'foto'=> "",			  
      'no_nota_persetujuan_bakn'=> "",
      'pejabat_ygmenetapkan'=> "",
      'no_sk_cpns'=> "",
      'tgl_sk_cpns'=> "",
      'gaji'=> "",
      'ijazah'=> "",
      'ijazah_tahun'=> "",
      'gol_ruang'=> "",
      'tmt_cpns'=> "",
      'tahun'=> "",
      'bulan'=> "",
      'jabatan'=> "",
      'opd'=> "",
      'tmt_spmt'=> "",
      'tahun_tambah_mk'=> "",
      'bulan_tambah_mk'=> ""
    ); 
    if(isset($_POST['kirim'])){
        $config['upload_path'] = './template/data/'; 
        $config['allowed_types'] = 'bmp|jpg|png|pdf';  
        $config['file_name'] = 'file_'.time();  
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){
          $SQLinsert = array(
            'tgl_persetujuan_bakn'=>$this->input->post('tgl_persetujuan_bakn'),
            'nama'=>$this->input->post('nama'),
            'foto'=>$this->upload->file_name,
            'no_nota_persetujuan_bakn'=>$this->input->post('no_nota_persetujuan_bakn'),
            'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
            'no_sk_cpns'=>$this->input->post('no_sk_cpns'),
            'tgl_sk_cpns'=>$this->input->post('tgl_sk_cpns'),
            'gaji'=>$this->input->post('gaji'),
            'ijazah'=>$this->input->post('ijazah'),
            'ijazah_tahun'=>$this->input->post('ijazah_tahun'),
            'gol_ruang'=>$this->input->post('gol_ruang'),
            'tmt_cpns'=>$this->input->post('tmt_cpns'),
            'tahun'=>$this->input->post('tahun'),
            'bulan'=>$this->input->post('bulan'),
            'jabatan'=>$this->input->post('jabatan'),
            'opd'=>$this->input->post('opd'),
            'tmt_spmt'=>$this->input->post('tmt_spmt'),
            'tahun_tambah_mk'=>$this->input->post('tahun_tambah_mk'),
            'bulan_tambah_mk'=>$this->input->post('bulan_tambah_mk')
          );
          $cek=$this->db->insert('pengangkatancpns',$SQLinsert);
          if($cek){
            $pesan='<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data Berhasil Di Ditambahkan.
                  </div>';
              $this->session->set_flashdata('pesan',$pesan);
              redirect(site_url('admin/pengangkatancpns'));
          }else{
            echo "QUERY SQL ERROR";
          }
        }else{
          echo $this->upload->display_errors();
        }
    }else{
     tpl('admin/pengangkatan/pengangkatancpns_form',$x);
    }
  }
    
  public function pengangkatancpns_edit($id='')
  {
    $sql=$this->db->get_where('pengangkatancpns',array('id_angkat_cpns'=>$id))->row_array(); 
    $x = array(
      'id_angkat_cpns' => $sql['id_angkat_cpns'],
      'judul'        =>'Edit Data Pengangkatan CPNS' ,
      'aksi'        =>'edit',
      'tgl_persetujuan_bakn'=>$sql['tgl_persetujuan_bakn'],
      'nama'=>$sql['nama'],
      'foto'=>$sql['foto'],
      'no_nota_persetujuan_bakn'=>$sql['no_nota_persetujuan_bakn'],
      'pejabat_ygmenetapkan'=>$sql['pejabat_ygmenetapkan'],
      'no_sk_cpns'=>$sql['no_sk_cpns'],
      'tgl_sk_cpns'=>$sql['tgl_sk_cpns'],
      'gaji'=>$sql['gaji'],
      'ijazah'=>$sql['ijazah'],
      'ijazah_tahun'=>$sql['ijazah_tahun'],
      'gol_ruang'=>$sql['gol_ruang'],
      'tmt_cpns'=>$sql['tmt_cpns'],
      'tahun'=>$sql['tahun'],
      'bulan'=>$sql['bulan'],
      'jabatan'=>$sql['jabatan'],
      'opd'=>$sql['opd'],
      'tmt_spmt'=>$sql['tmt_spmt'],
      'tahun_tambah_mk'=>$sql['tahun_tambah_mk'],
      'bulan_tambah_mk'=>$sql['bulan_tambah_mk']
    ); 
    if(isset($_POST['kirim'])){
      
		  if(empty($_FILES['gambar']['name'])){
        $inputData=array(
          'tgl_persetujuan_bakn'=>$this->input->post('tgl_persetujuan_bakn'),
          'nama'=>$this->input->post('nama'),
          'foto'=>$this->upload->file_name,
          'no_nota_persetujuan_bakn'=>$this->input->post('no_nota_persetujuan_bakn'),
          'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
          'no_sk_cpns'=>$this->input->post('no_sk_cpns'),
          'tgl_sk_cpns'=>$this->input->post('tgl_sk_cpns'),
          'gaji'=>$this->input->post('gaji'),
          'ijazah'=>$this->input->post('ijazah'),
          'ijazah_tahun'=>$this->input->post('ijazah_tahun'),
          'gol_ruang'=>$this->input->post('gol_ruang'),
          'tmt_cpns'=>$this->input->post('tmt_cpns'),
          'tahun'=>$this->input->post('tahun'),
          'bulan'=>$this->input->post('bulan'),
          'jabatan'=>$this->input->post('jabatan'),
          'opd'=>$this->input->post('opd'),
          'tmt_spmt'=>$this->input->post('tmt_spmt'),
          'tahun_tambah_mk'=>$this->input->post('tahun_tambah_mk'),
          'bulan_tambah_mk'=>$this->input->post('bulan_tambah_mk')
        );
        $this->db->update('pengangkatancpns',$inputData,array('id_angkat_cpns'=>$id));
            $pesan='<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data Berhasil Di Diedit.
                  </div>';
        $this->session->set_flashdata('pesan',$pesan);
        redirect(base_url('admin/pengangkatancpns_read'));
      }else{
          $config['upload_path'] = './template/data/'; 
          $config['allowed_types'] = 'bmp|jpg|png|pdf';  
          $config['file_name'] = 'file_'.time();  
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('gambar')){
            $inputData=array(
              'id_admin' => $this->session->userdata('id_admin'),
              'tgl_persetujuan_bakn'=>$this->input->post('tgl_persetujuan_bakn'),
              'nama'=>$this->input->post('nama'),
              'foto'=>$this->upload->file_name,
              'no_nota_persetujuan_bakn'=>$this->input->post('no_nota_persetujuan_bakn'),
              'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
              'no_sk_cpns'=>$this->input->post('no_sk_cpns'),
              'tgl_sk_cpns'=>$this->input->post('tgl_sk_cpns'),
              'gaji'=>$this->input->post('gaji'),
              'ijazah'=>$this->input->post('ijazah'),
              'ijazah_tahun'=>$this->input->post('ijazah_tahun'),
              'gol_ruang'=>$this->input->post('gol_ruang'),
              'tmt_cpns'=>$this->input->post('tmt_cpns'),
              'tahun'=>$this->input->post('tahun'),
              'bulan'=>$this->input->post('bulan'),
              'jabatan'=>$this->input->post('jabatan'),
              'opd'=>$this->input->post('opd'),
              'tmt_spmt'=>$this->input->post('tmt_spmt'),
              'tahun_tambah_mk'=>$this->input->post('tahun_tambah_mk'),
              'bulan_tambah_mk'=>$this->input->post('bulan_tambah_mk')
            );
            $cek = $this->db->update('pengangkatancpns',$inputData,array('id_angkat_cpns'=>$id));
            if($cek){
              unlink("./template/data/".$sql['foto']."");
              $pesan='<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                 Data Berhasil Di Diedit.
                </div>';
                $this->session->set_flashdata('pesan',$pesan);
                redirect(base_url('admin/pengangkatancpns_read'));
            }else{
              echo "QUERY SQL ERROR";
            }
          }else{
            echo $this->upload->display_errors();
          }
      }
    }else{
      tpl('admin/pengangkatan/pengangkatancpns2_form',$x);
    }
  }
 
  public function pengangkatancpns_hapus($id='')
  {
    $cek_foto = $this->db->query("SELECT foto FROM pengangkatancpns WHERE id_angkat_cpns='$id'");
    if ($cek_foto->num_rows() > 0) { // cek apakah data ada?
      $data_foto = $cek_foto->row(); // deklarasi data
      if ($data_foto->foto == "") { // ambil kolom foto, cek jika foto tidak ada
        // hapus data di tabel saja
        $cek = $this->db->delete('pengangkatancpns',array('id_angkat_cpns'=>$id));
        if ($cek) {
          $pesan='<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data Berhasil Di Hapus.
                  </div>';
          $this->session->set_flashdata('pesan',$pesan);
          redirect(base_url('admin/pengangkatancpns'));
        }
      }else{ // jika foto ada
        $delete_foto = unlink("./template/data/".$data_foto->foto.""); // hapus file foto yg ada di folder
        if ($delete_foto) { // jika berhasil hapus file
          $cek = $this->db->delete('pengangkatancpns',array('id_angkat_cpns'=>$id)); // hapus data di tabel
          if ($cek) {
            $pesan='<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Success!</h4>
                    Data Berhasil Di Hapus.
                    </div>';
            $this->session->set_flashdata('pesan',$pesan);
            redirect(base_url('admin/pengangkatancpns'));
          }
        }else{
          $pesan='<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Error!</h4>
                    Foto tidak terhapus.
                  </div>';
          $this->session->set_flashdata('pesan',$pesan);
          redirect(base_url('admin/pengangkatancpns'));
        }
      }
    }    
  }
  
  //untuk menampilkan di level user = pengangkatancpns_read
  public function pengangkatancpns_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Data Pengangkatan Pegawai CPNS ::', 
              'data'=>$this->db->get_where('pengangkatancpns', array('id_admin' => $id))->result_array()); 
   tpl('admin/pengangkatan/pengangkatancpns_read',$x);
  }
  
  
  public function pengangkatanpns()
  {
   $x = array('judul' =>'Data Pengangkatan PNS', 
              'data'=>$this->db->get('pengangkatanpns')->result_array()); 
   tpl('admin/pengangkatan/pengangkatanpns',$x);
  }

  public function pengangkatanpns_tambah()
  {
  $x = array('judul'        => 'Tambah Data Pengangkatan PNS' ,
              'aksi'        => 'tambah',
              'tgl_sk'=> "",
			  'nama'=> "",
			  'bukti'=> "",
			  'no_sk'=> "",
			  'pejabat_ygmenetapkan'=> "",
              'gapok_sk'=> "",
			  'pangkat_sk'=> "",
			  'gol_ruang'=> "",
			  'tmt_pns'=> "",
			  'tahun'=> "",
			  'bulan'=> "",
			  'suket_kesehatan'=> "",
			  'sttpl'=> "",
              'sumpah_janji_pns'=> ""); 
    if(isset($_POST['kirim'])){
      $config['upload_path'] = './template/data/'; 
      $config['allowed_types'] = 'bmp|jpg|png';  
      $config['file_name'] = 'bukti_'.time();  
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('gambar')){
        $inputData = array(
          'id_admin' => $this->session->userdata('id_admin'),
          'tgl_sk'=>$this->input->post('tgl_sk'),
          'nama'=>$this->input->post('nama'),
          'bukti'=>$this->upload->file_name,
          'no_sk'=>$this->input->post('no_sk'),
          'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
          'gapok_sk'=>$this->input->post('gapok_sk'),
          'pangkat_sk'=>$this->input->post('pangkat_sk'),
          'gol_ruang'=>$this->input->post('gol_ruang'),
          'tmt_pns'=>$this->input->post('tmt_pns'),
          'tahun'=>$this->input->post('tahun'),
          'bulan'=>$this->input->post('bulan'),
          'suket_kesehatan'=>$this->input->post('suket_kesehatan'),
          'sttpl'=>$this->input->post('sttpl'),
          'sumpah_janji_pns'=>$this->input->post('sumpah_janji_pns')
        );
        $cek=$this->db->insert('pengangkatanpns',$inputData);
        if($cek){
          $pesan='<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil Di Ditambahkan.
                </div>';
        $this->session->set_flashdata('pesan',$pesan);
        redirect(base_url('admin/pengangkatanpns'));
      }else{
        echo "ERROR input Data";
      }
	  }else{
      echo $this->upload->display_errors();
    }
    }else{
     tpl('admin/pengangkatan/pengangkatanpns_form',$x);
    }
  }
    
  public function pengangkatanpns_edit($id='')
  {
    $sql=$this->db->get_where('pengangkatanpns',array('id_angkat_pns'=>$id))->row_array(); 
    $x = array(
      'id_angkat_pns' => $sql['id_angkat_pns'],
      'judul'        =>'Edit Data Pengangkatan PNS' ,
      'aksi'        =>'edit',
      'tgl_sk'=>$sql['tgl_sk'],
      'nama'=>$sql['nama'],
      'bukti'=>$sql['bukti'],
      'no_sk'=>$sql['no_sk'],
      'pejabat_ygmenetapkan'=>$sql['pejabat_ygmenetapkan'],
      'gapok_sk'=>$sql['gapok_sk'],
      'pangkat_sk'=>$sql['pangkat_sk'],
      'gol_ruang'=>$sql['gol_ruang'],
      'tmt_pns'=>$sql['tmt_pns'],
      'tahun'=>$sql['tahun'],
      'bulan'=>$sql['bulan'],
      'suket_kesehatan'=>$sql['suket_kesehatan'],
      'sttpl'=>$sql['sttpl'],
      'sumpah_janji_pns'=>$sql['sumpah_janji_pns']
    ); 
    if(isset($_POST['kirim'])){
      $config['upload_path'] = './template/data/'; 
      $config['allowed_types'] = 'bmp|jpg|png';  
      $config['file_name'] = 'foto_'.time();  
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if($this->upload->do_upload('gambar')){
        $inputData=array(
          'tgl_sk'=>$this->input->post('tgl_sk'),
          'nama'=>$this->input->post('nama'),
          'bukti'=>$this->upload->file_name,
          'no_sk'=>$this->input->post('no_sk'),
          'pejabat_ygmenetapkan'=>$this->input->post('pejabat_ygmenetapkan'),
          'gapok_sk'=>$this->input->post('gapok_sk'),
          'pangkat_sk'=>$this->input->post('pangkat_sk'),
          'gol_ruang'=>$this->input->post('gol_ruang'),
          'tmt_pns'=>$this->input->post('tmt_pns'),
          'tahun'=>$this->input->post('tahun'),
          'bulan'=>$this->input->post('bulan'),
          'suket_kesehatan'=>$this->input->post('suket_kesehatan'),
          'sttpl'=>$this->input->post('sttpl'),
          'sumpah_janji_pns'=>$this->input->post('sumpah_janji_pns')
        );
        $cek = $this->db->update('pengangkatanpns',$inputData,array('id_angkat_pns'=>$id));
        if($cek){
          unlink("./template/data/".$sql['bukti']."");
          $pesan='<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil Di Diedit.
                </div>';
          $this->session->set_flashdata('pesan',$pesan);
          redirect(base_url('admin/pengangkatanpns_read'));
        }else{
          echo "ERROR input Data";
        }
      }else{
        echo $this->upload->display_errors();
      }
    }else{
      tpl('admin/pengangkatan/pengangkatanpns2_form',$x);
    }
  }

  
  public function pengangkatanpns_hapus($id='')
  {
    $cek_foto = $this->db->query("SELECT bukti FROM pengangkatanpns WHERE id_angkat_pns='$id'");
    if ($cek_foto->num_rows() > 0) { // cek apakah data ada?
      $data_foto = $cek_foto->row(); // deklarasi data
      if ($data_foto->bukti == "") {
        $cek=$this->db->delete('pengangkatanpns',array('id_angkat_pns'=>$id));
        if ($cek) {
          $pesan='<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                   Data Berhasil Di Hapus.
                  </div>';
          $this->session->set_flashdata('pesan',$pesan);
          redirect(base_url('admin/pengangkatanpns'));
        }
      }else{
        $delete_foto = unlink("./template/data/".$data_foto->bukti.""); // hapus file foto yg ada di folder
        if ($delete_foto) { // jika berhasil hapus file
          $cek = $this->db->delete('pengangkatanpns',array('id_angkat_pns'=>$id)); // hapus data di tabel
          if ($cek) {
            $pesan='<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Success!</h4>
                    Data Berhasil Di Hapus.
                    </div>';
            $this->session->set_flashdata('pesan',$pesan);
            redirect(base_url('admin/pengangkatanpns'));
          }
        }else{
          $pesan='<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Error!</h4>
                    Foto tidak terhapus.
                  </div>';
          $this->session->set_flashdata('pesan',$pesan);
          redirect(base_url('admin/pengangkatanpns'));
        }
      }
    }
  }
  
  //untuk menampilkan di level user = pengangkatanpns_read
  public function pengangkatanpns_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Data Pengangkatan Pegawai PNS ::', 
              'data'=>$this->db->get_where('pengangkatanpns', array('id_admin' => $id))->result_array()); 
   tpl('admin/pengangkatan/pengangkatanpns_read',$x);
  }


 public function kelpeg()
  {
   $x = array('judul' =>':: Data Keluarga Pegawai ::', 
              'data'=>$this->db->get('kelpeg')->result_array()); 
   tpl('admin/kelpeg/kelpeg',$x);
  }

  public function kelpeg_hapus($id='')
  {
   $cek=$this->db->delete('kelpeg',array('id_kelpeg'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/kelpeg/kelpeg'));
   }
  }


public function menu_riwayat()
  {
      $x = array('judul' =>'Menu Riwayat Pegawai');
      tpl('admin/menu_riwayat',$x);
  }


public function pegawai_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Detail Data Pegawai ::', 
              'data'=>$this->db->get_where('pegawai', array('id_admin' => $id))->result_array()); 
   tpl('admin/pegawai/pegawai_read',$x);
  }

  public function pegawai_read_tambah()
  {
  $x = array('judul'        => 'Tambah Detail Data Pegawai' ,
              'aksi'        => 'tambah',
      'nip'=>'',
      'nama'=>'',
      'npwp'=>'',
      'nik'=>'',
      'gelar_kesarjanaan'=>'',
      'tempat'=>'',
      'tgl_lahir'=>'',
      'jk'=>'',
      'foto'=>'',
      'agama'=>'',
      'pendidikan'=>'',
      'status_kep'=>'',
      'alamat'=>'',
      'no_hp'=>'',
      'email'=>'',
      'goldar'=>'',
      'status_kawin'=>'',
      'tgl_pensiun'=>'',
      'no_karpeg'=>'',
      'no_taspen'=>''); 
    if(isset($_POST['kirim'])){
        $config['upload_path'] = './template/data/'; 
        $config['allowed_types'] = 'bmp|jpg|png';  
        $config['file_name'] = 'foto_'.time();  
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){
          $SQLinsert=array(
        'nip'=>$this->input->post('nip'),
        'nama'=>$this->input->post('nama'),
        'npwp'=>$this->input->post('npwp'),
    'nik'=>$this->input->post('nik'),
    'gelar_kesarjanaan'=>$this->input->post('gelar_kesarjanaan'),
    'tempat'=>$this->input->post('tempat'),
    'tgl_lahir'=>$this->input->post('tgl_lahir'),
    'jk'=>$this->input->post('jk'),
    'foto'=>$this->upload->file_name,
    'agama'=>$this->input->post('agama'),
    'pendidikan'=>$this->input->post('pendidikan'),
    'status_kep'=>$this->input->post('status_kep'),
    'alamat'=>$this->input->post('alamat'),
    'no_hp'=>$this->input->post('no_hp'),
    'email'=>$this->input->post('email'),
    'goldar'=>$this->input->post('goldar'),
    'status_kawin'=>$this->input->post('status_kawin'),
    'tgl_pensiun'=>$this->input->post('tgl_pensiun'),
    'no_karpeg'=>$this->input->post('no_karpeg'),
    'no_taspen'=>$this->input->post('no_taspen')
        );
      $cek=$this->db->insert('pegawai',$SQLinsert);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pegawai/pegawai'));
      }else{
       echo "QUERY SQL ERROR";
      }
    }else{
      echo $this->upload->display_errors();
    }
  }else{
     tpl('admin/pegawai/pegawai2_form',$x);
    }
  }
    
  public function pegawai_read_edit($id='')
  {
  $sql=$this->db->get_where('pegawai',array('id_pegawai'=>$id))->row_array(); 
  $x = array('judul'        =>'Edit Detail Data Pegawai' ,
              'aksi'        =>'Edit',
        'foto'=>$sql['foto'],
    'nip'=>$sql['nip'],
    'nama'=>$sql['nama'],
    'npwp'=>$sql['npwp'],
    'nik'=>$sql['nik'],
    'gelar_kesarjanaan'=>$sql['gelar_kesarjanaan'],
    'tempat'=>$sql['tempat'],
    'tgl_lahir'=>$sql['tgl_lahir'],
    'jk'=>$sql['jk'],
    'agama'=>$sql['agama'],
    'pendidikan'=>$sql['pendidikan'],
    'status_kep'=>$sql['status_kep'],
    'alamat'=>$sql['alamat'],
    'no_hp'=>$sql['no_hp'],
    'email'=>$sql['email'],
    'goldar'=>$sql['goldar'],
    'status_kawin'=>$sql['status_kawin'],
    'tgl_pensiun'=>$sql['tgl_pensiun'],
    'no_karpeg'=>$sql['no_karpeg'],
    'no_taspen'=>$sql['no_taspen']); 
    if(isset($_POST['kirim'])){
      if(empty($_FILES['gambar']['name'])){
        $SQLinsert=array(
    'foto'=>$this->upload->file_name,
    'nip'=>$this->input->post('nip'),
    'nama'=>$this->input->post('nama'),
    'npwp'=>$this->input->post('npwp'),
    'nik'=>$this->input->post('nik'),
    'gelar_kesarjanaan'=>$this->input->post('gelar_kesarjanaan'),
    'tempat'=>$this->input->post('tempat'),
    'tgl_lahir'=>$this->input->post('tgl_lahir'),
    'jk'=>$this->input->post('jk'),
    'agama'=>$this->input->post('agama'),
    'pendidikan'=>$this->input->post('pendidikan'),
    'status_kep'=>$this->input->post('status_kep'),
    'alamat'=>$this->input->post('alamat'),
    'no_hp'=>$this->input->post('no_hp'),
    'email'=>$this->input->post('email'),
    'goldar'=>$this->input->post('goldar'),
    'status_kawin'=>$this->input->post('status_kawin'),
    'tgl_pensiun'=>$this->input->post('tgl_pensiun'),
    'no_karpeg'=>$this->input->post('no_karpeg'),
    'no_taspen'=>$this->input->post('no_taspen')
        );
    
      $this->db->update('pegawai',$SQLinsert,array('id_pegawai'=>$id));
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pegawai/pegawai_read'));
      }else{
        $config['upload_path'] = './template/data/'; 
        $config['allowed_types'] = 'bmp|jpg|png';  
        $config['file_name'] = 'foto_'.time();  
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('gambar')){
          $SQLinsert=array(
        'foto'=>$this->upload->file_name,
        'nip'=>$this->input->post('nip'),
        'nama'=>$this->input->post('nama'),
        'npwp'=>$this->input->post('npwp'),
        'nik'=>$this->input->post('nik'),
        'gelar_kesarjanaan'=>$this->input->post('gelar_kesarjanaan'),
        'tempat'=>$this->input->post('tempat'),
        'tgl_lahir'=>$this->input->post('tgl_lahir'),
        'jk'=>$this->input->post('jk'),
        'agama'=>$this->input->post('agama'),
        'pendidikan'=>$this->input->post('pendidikan'),
        'status_kep'=>$this->input->post('status_kep'),
        'alamat'=>$this->input->post('alamat'),
        'no_hp'=>$this->input->post('no_hp'),
        'email'=>$this->input->post('email'),
        'goldar'=>$this->input->post('goldar'),
        'status_kawin'=>$this->input->post('status_kawin'),
        'tgl_pensiun'=>$this->input->post('tgl_pensiun'),
        'no_karpeg'=>$this->input->post('no_karpeg'),
        'no_taspen'=>$this->input->post('no_taspen')
        );
          $cek=$this->db->update('pegawai', $SQLinsert, array('id_pegawai' => $id));
          if($cek){
            $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
              $this->session->set_flashdata('pesan',$pesan);
              redirect(base_url('admin/pegawai_read'));
          }else{
       echo "QUERY SQL ERROR";
      }
    }else{
      echo $this->upload->display_errors();
    }
  }
}else{
     tpl('admin/pegawai/pegawairead2_form',$x);
    }
  }
  
  public function pegawai_read_detail($id='')
  {
  $sql=$this->db->get_where('pegawai',array('id_pegawai'=>$id))->row_array(); 
  $x = array('judul'        =>'Detail Data Pegawai' ,
              'aksi'        =>'detail',
    'foto'=>$sql['foto'],
    'nip'=>$sql['nip'],
    'nama'=>$sql['nama'],
    'npwp'=>$sql['npwp'],
    'nik'=>$sql['nik'],
    'gelar_kesarjanaan'=>$sql['gelar_kesarjanaan'],
    'tempat'=>$sql['tempat'],
    'tgl_lahir'=>$sql['tgl_lahir'],
    'jk'=>$sql['jk'],
    'agama'=>$sql['agama'],
    'pendidikan'=>$sql['pendidikan'],
    'status_kep'=>$sql['status_kep'],
    'alamat'=>$sql['alamat'],
    'no_hp'=>$sql['no_hp'],
    'email'=>$sql['email'],
    'goldar'=>$sql['goldar'],
    'status_kawin'=>$sql['status_kawin'],
    'tgl_pensiun'=>$sql['tgl_pensiun'],
    'no_karpeg'=>$sql['no_karpeg'],
    'no_taspen'=>$sql['no_taspen']
  ); 
    if(isset($_POST['kirim'])){
      $inputData=array(
    'foto'=>$this->upload->file_name,
    'nip'=>$this->input->post('nip'),
    'nama'=>$this->input->post('nama'),
    'npwp'=>$this->input->post('npwp'),
    'nik'=>$this->input->post('nik'),
    'gelar_kesarjanaan'=>$this->input->post('gelar_kesarjanaan'),
    'tempat'=>$this->input->post('tempat'),
    'tgl_lahir'=>$this->input->post('tgl_lahir'),
    'jk'=>$this->input->post('jk'),
    'agama'=>$this->input->post('agama'),
    'pendidikan'=>$this->input->post('pendidikan'),
    'status_kep'=>$this->input->post('status_kep'),
    'alamat'=>$this->input->post('alamat'),
    'no_hp'=>$this->input->post('no_hp'),
    'email'=>$this->input->post('email'),
    'goldar'=>$this->input->post('goldar'),
    'status_kawin'=>$this->input->post('status_kawin'),
    'tgl_pensiun'=>$this->input->post('tgl_pensiun'),
    'no_karpeg'=>$this->input->post('no_karpeg'),
    'no_taspen'=>$this->input->post('no_taspen')
        );
      $cek=$this->db->update('pegawai',$inputData,array('id_pegawai'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pegawai/pegawai_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/pegawai/pegawairead_form',$x);
    }
  }
  
  public function pegawai_read_hapus($id='')
  {
   $cek=$this->db->delete('pegawai',array('id_pegawai'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pegawai/pegawai_read'));
   }
  }
  
  
  public function kelpeg_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Data Keluarga Pegawai ::', 
              'data'=>$this->db->get_where('kelpeg', array('id_admin' => $id))->result_array()); 
   tpl('admin/kelpeg/kelpeg_read',$x);
  }

  public function kelpegread_tambah()
  {
  $x = array('judul'        => 'Tambah Data Keluarga Pegawai' ,
              'aksi'        => 'tambah',
			'nama'=>'',
			'nama_ayah'=>'',
			'tempat_ayah'=>'',
			'tgllahir_ayah'=>'',
			'pekerjaan_ayah'=>'',
			'nama_ibu'=>'',
			'tempat_ibu'=>'',
			'tgllahir_ibu'=>'',
			'pekerjaan_ibu'=>'',
			'nama_is'=>'',
			'tempat_is'=>'',
			'tgllahir_is'=>'',
			'tgl_kawin'=>'',
			'pend_akhir'=>'',
			'pekerjaan_is'=>'',
			'nip_is'=>'',
			'pangkat'=>'',
			'no_kk'=>'',
			'nik_is'=>'',
			'opd'=>'',
			'nama_anak1'=>'',
			'tempat_anak1'=>'',
			'tgllahir_anak1'=>'',
			'pekerjaan_anak1'=>'',
			'status_anak1'=>'',
			'pend_anak1'=>'',
			'jk_anak1'=>'',
			'nama_anak2'=>'',
			'tempat_anak2'=>'',
			'tgllahir_anak2'=>'',
			'pekerjaan_anak2'=>'',
			'status_anak2'=>'',
			'pend_anak2'=>'',
			'jk_anak2'=>'',
			'nama_anak3'=>'',
			'tempat_anak3'=>'',
			'tgllahir_anak3'=>'',
			'pekerjaan_anak3'=>'',
			'status_anak3'=>'',
			'pend_anak3'=>'',
			'jk_anak3'=>''
			); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nama'=>$this->input->post('nama'),
        'nama_ayah'=>$this->input->post('nama_ayah'),
		'tempat_ayah'=>$this->input->post('tempat_ayah'),
		'tgllahir_ayah'=>$this->input->post('tgllahir_ayah'),
		'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
		'nama_ibu'=>$this->input->post('nama_ibu'),
		'tempat_ibu'=>$this->input->post('tempat_ibu'),
		'tgllahir_ibu'=>$this->input->post('tgllahir_ibu'),
		'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
		'nama_is'=>$this->input->post('nama_is'),
		'tempat_is'=>$this->input->post('tempat_is'),
		'tgllahir_is'=>$this->input->post('tgllahir_is'),
		'tgl_kawin'=>$this->input->post('tgl_kawin'),
		'pend_akhir'=>$this->input->post('pend_akhir'),
		'pekerjaan_is'=>$this->input->post('pekerjaan_is'),
		'nip_is'=>$this->input->post('nip_is'),
		'pangkat'=>$this->input->post('pangkat'),
		'no_kk'=>$this->input->post('no_kk'),
		'nik_is'=>$this->input->post('nik_is'),
		'opd'=>$this->input->post('opd'),
		'nama_anak1'=>$this->input->post('nama_anak1'),
		'tempat_anak1'=>$this->input->post('tempat_anak1'),
		'tgllahir_anak1'=>$this->input->post('tgllahir_anak1'),
		'pekerjaan_anak1'=>$this->input->post('pekerjaan_anak1'),
		'status_anak1'=>$this->input->post('status_anak1'),
		'pend_anak1'=>$this->input->post('pend_anak1'),
		'jk_anak1'=>$this->input->post('jk_anak1'),
		'nama_anak2'=>$this->input->post('nama_anak2'),
		'tempat_anak2'=>$this->input->post('tempat_anak2'),
		'tgllahir_anak2'=>$this->input->post('tgllahir_anak2'),
		'pekerjaan_anak2'=>$this->input->post('pekerjaan_anak2'),
		'status_anak2'=>$this->input->post('status_anak2'),
		'pend_anak2'=>$this->input->post('pend_anak2'),
		'jk_anak2'=>$this->input->post('jk_anak2'),
		'nama_anak3'=>$this->input->post('nama_anak3'),
		'tempat_anak3'=>$this->input->post('tempat_anak3'),
		'tgllahir_anak3'=>$this->input->post('tgllahir_anak3'),
		'pekerjaan_anak3'=>$this->input->post('pekerjaan_anak3'),
		'status_anak3'=>$this->input->post('status_anak3'),
		'pend_anak3'=>$this->input->post('pend_anak3'),
		'jk_anak3'=>$this->input->post('jk_anak3')
        );
      $cek=$this->db->insert('kelpeg',$inputData);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/kelpeg/kelpeg'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/kelpeg/kelpeg2_form',$x);
    }
  }
    
  public function kelpegread_edit($id='')
  {
  $sql=$this->db->get_where('kelpeg',array('id_kelpeg'=>$id))->row_array(); 
  $x = array('judul'        =>'Edit Data Keluarga Pegawai' ,
              'aksi'        =>'edit',
	'nama'=>$sql['nama'],
  'nama_ayah'=>$sql['nama_ayah'],
	'tempat_ayah'=>$sql['tempat_ayah'],
	'tgllahir_ayah'=>$sql['tgllahir_ayah'],
	'pekerjaan_ayah'=>$sql['pekerjaan_ayah'],
	'nama_ibu'=>$sql['nama_ibu'],
	'tempat_ibu'=>$sql['tempat_ibu'],
	'tgllahir_ibu'=>$sql['tgllahir_ibu'],
	'pekerjaan_ibu'=>$sql['pekerjaan_ibu'],
	'nama_is'=>$sql['nama_is'],
	'tempat_is'=>$sql['tempat_is'],
	'tgllahir_is'=>$sql['tgllahir_is'],
	'tgl_kawin'=>$sql['tgl_kawin'],
	'pend_akhir'=>$sql['pend_akhir'],
	'pekerjaan_is'=>$sql['pekerjaan_is'],
	'nip_is'=>$sql['nip_is'],
	'pangkat'=>$sql['pangkat'],
	'no_kk'=>$sql['no_kk'],
	'nik_is'=>$sql['nik_is'],
	'opd'=>$sql['opd'],
	'nama_anak1'=>$sql['nama_anak1'],
	'tempat_anak1'=>$sql['tempat_anak1'],
	'tgllahir_anak1'=>$sql['tgllahir_anak1'],
	'pekerjaan_anak1'=>$sql['pekerjaan_anak1'],
	'status_anak1'=>$sql['status_anak1'],
	'pend_anak1'=>$sql['pend_anak1'],
	'jk_anak1'=>$sql['jk_anak1'],
	'nama_anak2'=>$sql['nama_anak2'],
	'tempat_anak2'=>$sql['tempat_anak2'],
	'tgllahir_anak2'=>$sql['tgllahir_anak2'],
	'pekerjaan_anak2'=>$sql['pekerjaan_anak2'],
	'status_anak2'=>$sql['status_anak2'],
	'pend_anak2'=>$sql['pend_anak2'],
	'jk_anak2'=>$sql['jk_anak2'],
	'nama_anak3'=>$sql['nama_anak3'],
	'tempat_anak3'=>$sql['tempat_anak3'],
	'tgllahir_anak3'=>$sql['tgllahir_anak3'],
	'pekerjaan_anak3'=>$sql['pekerjaan_anak3'],
	'status_anak3'=>$sql['status_anak3'],
	'pend_anak3'=>$sql['pend_anak3'],
	'jk_anak3'=>$sql['jk_anak3']
	); 
    if(isset($_POST['kirim'])){
      $inputData=array(
	  'nama'=>$this->input->post('nama'),
	  'nama_ayah'=>$this->input->post('nama_ayah'),
	  'tempat_ayah'=>$this->input->post('tempat_ayah'),
	  'tgllahir_ayah'=>$this->input->post('tgllahir_ayah'),
	  'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
	  'nama_ibu'=>$this->input->post('nama_ibu'),
	  'tempat_ibu'=>$this->input->post('tempat_ibu'),
	  'tgllahir_ibu'=>$this->input->post('tgllahir_ibu'),
	  'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
	  'nama_is'=>$this->input->post('nama_is'),
	  'tempat_is'=>$this->input->post('tempat_is'),
	  'tgllahir_is'=>$this->input->post('tgllahir_is'),
	  'tgl_kawin'=>$this->input->post('tgl_kawin'),
	  'pend_akhir'=>$this->input->post('pend_akhir'),
	  'pekerjaan_is'=>$this->input->post('pekerjaan_is'),
	  'nip_is'=>$this->input->post('nip_is'),
	  'pangkat'=>$this->input->post('pangkat'),
	  'no_kk'=>$this->input->post('no_kk'),
	  'nik_is'=>$this->input->post('nik_is'),
	  'opd'=>$this->input->post('opd'),
	  'nama_anak1'=>$this->input->post('nama_anak1'),
	  'tempat_anak1'=>$this->input->post('tempat_anak1'),
	  'tgllahir_anak1'=>$this->input->post('tgllahir_anak1'),
	  'pekerjaan_anak1'=>$this->input->post('pekerjaan_anak1'),
	  'status_anak1'=>$this->input->post('status_anak1'),
	  'pend_anak1'=>$this->input->post('pend_anak1'),
	  'jk_anak1'=>$this->input->post('jk_anak1'),
	  'nama_anak2'=>$this->input->post('nama_anak2'),
	  'tempat_anak2'=>$this->input->post('tempat_anak2'),
	  'tgllahir_anak2'=>$this->input->post('tgllahir_anak2'),
	  'pekerjaan_anak2'=>$this->input->post('pekerjaan_anak2'),
	  'status_anak2'=>$this->input->post('status_anak2'),
	  'pend_anak2'=>$this->input->post('pend_anak2'),
	  'jk_anak2'=>$this->input->post('jk_anak2'),
	  'nama_anak3'=>$this->input->post('nama_anak3'),
	  'tempat_anak3'=>$this->input->post('tempat_anak3'),
	  'tgllahir_anak3'=>$this->input->post('tgllahir_anak3'),
	  'pekerjaan_anak3'=>$this->input->post('pekerjaan_anak3'),
	  'status_anak3'=>$this->input->post('status_anak3'),
	  'pend_anak3'=>$this->input->post('pend_anak3'),
	  'jk_anak3'=>$this->input->post('jk_anak3')
      );
      $cek=$this->db->update('kelpeg',$inputData,array('id_kelpeg'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/kelpeg_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/kelpeg/kelpegread2_form',$x);
    }
  }
  
  public function kelpegread_detail($id=''){
  $sql=$this->db->get_where('kelpeg',array('id_kelpeg'=>$id))->row_array(); 
  $x = array('judul'        =>'Detail Data Keluarga Pegawai' ,
              'aksi'        =>'detail',

	'nama'=>$sql['nama'],
    'nama_ayah'=>$sql['nama_ayah'],
	'tempat_ayah'=>$sql['tempat_ayah'],
	'tgllahir_ayah'=>$sql['tgllahir_ayah'],
	'pekerjaan_ayah'=>$sql['pekerjaan_ayah'],
	'nama_ibu'=>$sql['nama_ibu'],
	'tempat_ibu'=>$sql['tempat_ibu'],
	'tgllahir_ibu'=>$sql['tgllahir_ibu'],
	'pekerjaan_ibu'=>$sql['pekerjaan_ibu'],
	'nama_is'=>$sql['nama_is'],
	'tempat_is'=>$sql['tempat_is'],
	'tgllahir_is'=>$sql['tgllahir_is'],
	'tgl_kawin'=>$sql['tgl_kawin'],
	'pend_akhir'=>$sql['pend_akhir'],
	'pekerjaan_is'=>$sql['pekerjaan_is'],
	'nip_is'=>$sql['nip_is'],
	'pangkat'=>$sql['pangkat'],
	'no_kk'=>$sql['no_kk'],
	'nik_is'=>$sql['nik_is'],
	'opd'=>$sql['opd'],
	'nama_anak1'=>$sql['nama_anak1'],
	'tempat_anak1'=>$sql['tempat_anak1'],
	'tgllahir_anak1'=>$sql['tgllahir_anak1'],
	'pekerjaan_anak1'=>$sql['pekerjaan_anak1'],
	'status_anak1'=>$sql['status_anak1'],
	'pend_anak1'=>$sql['pend_anak1'],
	'jk_anak1'=>$sql['jk_anak1'],
	'nama_anak2'=>$sql['nama_anak2'],
	'tempat_anak2'=>$sql['tempat_anak2'],
	'tgllahir_anak2'=>$sql['tgllahir_anak2'],
	'pekerjaan_anak2'=>$sql['pekerjaan_anak2'],
	'status_anak2'=>$sql['status_anak2'],
	'pend_anak2'=>$sql['pend_anak2'],
	'jk_anak2'=>$sql['jk_anak2'],
	'nama_anak3'=>$sql['nama_anak3'],
	'tempat_anak3'=>$sql['tempat_anak3'],
	'tgllahir_anak3'=>$sql['tgllahir_anak3'],
	'pekerjaan_anak3'=>$sql['pekerjaan_anak3'],
	'status_anak3'=>$sql['status_anak3'],
	'pend_anak3'=>$sql['pend_anak3'],
	'jk_anak3'=>$sql['jk_anak3'],	
	); 
    if(isset($_POST['kirim'])){
      $inputData=array(
	  'nama'=>$this->input->post('nama'),
      'nama_ayah'=>$this->input->post('nama_ayah'),
	  'tempat_ayah'=>$this->input->post('tempat_ayah'),
	  'tgllahir_ayah'=>$this->input->post('tgllahir_ayah'),
	  'pekerjaan_ayah'=>$this->input->post('pekerjaan_ayah'),
	  'nama_ibu'=>$this->input->post('nama_ibu'),
	  'tempat_ibu'=>$this->input->post('tempat_ibu'),
	  'tgllahir_ibu'=>$this->input->post('tgllahir_ibu'),
	  'pekerjaan_ibu'=>$this->input->post('pekerjaan_ibu'),
	  'nama_is'=>$this->input->post('nama_is'),
	  'tempat_is'=>$this->input->post('tempat_is'),
	  'tgllahir_is'=>$this->input->post('tgllahir_is'),
	  'tgl_kawin'=>$this->input->post('tgl_kawin'),
	  'pend_akhir'=>$this->input->post('pend_akhir'),
	  'pekerjaan_is'=>$this->input->post('pekerjaan_is'),
	  'nip_is'=>$this->input->post('nip_is'),
	  'pangkat'=>$this->input->post('pangkat'),
	  'no_kk'=>$this->input->post('no_kk'),
	  'nik_is'=>$this->input->post('nik_is'),
	  'opd'=>$this->input->post('opd'),
	  'nama_anak1'=>$this->input->post('nama_anak1'),
	  'tempat_anak1'=>$this->input->post('tempat_anak1'),
	  'tgllahir_anak1'=>$this->input->post('tgllahir_anak1'),
	  'pekerjaan_anak1'=>$this->input->post('pekerjaan_anak1'),
	  'status_anak1'=>$this->input->post('status_anak1'),
	  'pend_anak1'=>$this->input->post('pend_anak1'),
	  'jk_anak1'=>$this->input->post('jk_anak1'),
	  'nama_anak2'=>$this->input->post('nama_anak2'),
	  'tempat_anak2'=>$this->input->post('tempat_anak2'),
	  'tgllahir_anak2'=>$this->input->post('tgllahir_anak2'),
	  'pekerjaan_anak2'=>$this->input->post('pekerjaan_anak2'),
	  'status_anak2'=>$this->input->post('status_anak2'),
	  'pend_anak2'=>$this->input->post('pend_anak2'),
	  'jk_anak2'=>$this->input->post('jk_anak2'),
	  'nama_anak3'=>$this->input->post('nama_anak3'),
	  'tempat_anak3'=>$this->input->post('tempat_anak3'),
	  'tgllahir_anak3'=>$this->input->post('tgllahir_anak3'),
	  'pekerjaan_anak3'=>$this->input->post('pekerjaan_anak3'),
	  'status_anak3'=>$this->input->post('status_anak3'),
	  'pend_anak3'=>$this->input->post('pend_anak3'),
	  'jk_anak3'=>$this->input->post('jk_anak3')
      );
      $cek=$this->db->update('kelpeg',$inputData,array('id_kelpeg'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/kelpeg/kelpeg_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/kelpeg/kelpegread_form',$x);
    }
  }
  
  public function pendidikan()
  {
   $x = array('judul' =>'Data Riwayat Pendidikan', 
              'data'=>$this->db->get('pendidikan')->result_array()); 
   tpl('admin/pendidikan/pendidikan',$x);
  }

  //tampilan user = function pendidikan_read
  public function pendidikan_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>':: Detail Data Pendidikan ::', 
              'data'=>$this->db->get_where('pendidikan', array('id_admin' => $id))->result_array()); 
   tpl('admin/pendidikan/pendidikan_read',$x);
  }

  public function pendidikan_tambah()
  {
  $x = array('judul'        => 'Tambah Data Pendidikan' ,
              'aksi'        => 'tambah',
              'nip'=> '',
			  'nama'=> '',
              'SD'=>'',
			  'SMP'=>'',
			  'SMA'=>'',
			  'D3'=>'',
			  'S1'=>'',
			  'S2'=>'',
              'pend_akhir'=>''); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'SD'=>$this->input->post('SD'),
		'SMP'=>$this->input->post('SMP'),
		'SMA'=>$this->input->post('SMA'),
		'D3'=>$this->input->post('D3'),
		'S1'=>$this->input->post('S1'),
        'S2'=>$this->input->post('S2'),
        'pend_akhir'=>$this->input->post('pend_akhir'));
      $cek=$this->db->insert('pendidikan',$inputData);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pendidikan/pendidikan'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/pendidikan/pendidikan_form',$x);
    }
  }
    
  public function pendidikan_edit($id='')
  {
  $sql=$this->db->get_where('pendidikan',array('id_pendidikan'=>$id))->row_array(); 
  $x = array('judul'        =>'Edit Data Riwayat Pendidikan' ,
              'aksi'        =>'edit',
        'nip'=>$sql['nip'],
		'nama'=>$sql['nama'],
		'SD'=>$sql['SD'],
		'SMP'=>$sql['SMP'],
		'SMA'=>$sql['SMA'],
		'D3'=>$sql['D3'],
		'S1'=>$sql['S1'],
        'S2'=>$sql['S2'],
        'pend_akhir'=>$sql['pend_akhir']); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'SD'=>$this->input->post('SD'),
		'SMP'=>$this->input->post('SMP'),
		'SMA'=>$this->input->post('SMA'),
		'D3'=>$this->input->post('D3'),
        'S1'=>$this->input->post('S1'),
		'S2'=>$this->input->post('S2'),
        'pend_akhir'=>$this->input->post('pend_akhir'));
      $cek=$this->db->update('pendidikan',$inputData,array('id_pendidikan'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pendidikan_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/pendidikan/pendidikanread_form',$x);
    }
  }

  
  public function pendidikan_hapus($id='')
  {
   $cek=$this->db->delete('pendidikan',array('id_pendidikan'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/pendidikan/pendidikan'));
   }
  }


// view diklat struktural
public function diklatstruktural()
  {
   $x = array('judul' =>'Data Riwayat Diklat Struktural', 
              'data'=>$this->db->get('diklat_struktural')->result_array()); 
   tpl('admin/diklat/diklatstruktural',$x);
  }

  // view diklat struktural_read
public function diklatstruktural_read()
  {
   $id = $this->session->userdata('id_admin');
   $x = array('judul' =>'Data Riwayat Diklat Struktural', 
              'data'=>$this->db->get_where('diklat_struktural', array('id_admin' => $id))->result_array()); 
   tpl('admin/diklat/diklatstruktural_read',$x);
  }

public function diklat_tambah()
  {
  $x = array('judul'        => 'Tambah Data Riwayat Diklat Struktural' ,
              'aksi'        => 'tambah',
              'nip'=> '',
			  'nama'=> '',
			  'diklatI'=> '',
			  'jam_diklatI'=> '',
			  'tgl_diklatI'=> '',
			  'tahun_diklatI'=> '',
			  'angkatan_diklatI'=> '',
			  'no_diklatI'=> '',
			  'penyelenggara_diklatI'=> '',
			  'tempat_diklatI'=> '',
			  'diklatII'=> '',
			  'jam_diklatII'=> '',
			  'tgl_diklatII'=> '',
			  'tahun_diklatII'=> '',
			  'angkatan_diklatII'=> '',
			  'no_diklatII'=> '',
			  'penyelenggara_diklatII'=> '',
			  'tempat_diklatII'=> '',
			  'diklatIII'=> '',
			  'jam_diklatIII'=> '',
			  'tgl_diklatIII'=> '',
			  'tahun_diklatIII'=> '',
			  'angkatan_diklatIII'=> '',
			  'no_diklatIII'=> '',
			  'penyelenggara_diklatIII'=> '',
			  'tempat_diklatIII'=> '',
			  'diklatIV'=> '',
			  'jam_diklatIV'=> '',
			  'tgl_diklatIV'=> '',
			  'tahun_diklatIV'=> '',
			  'angkatan_diklatIV'=> '',
			  'no_diklatIV'=> '',
			  'penyelenggara_diklatIV'=> '',
              'tempat_diklatIV'=>''); 
    if(isset($_POST['kirim'])){
      $inputData=array(
        'nip'=>$this->input->post('nip'),
		'nama'=>$this->input->post('nama'),
		'diklatI'=>$this->input->post('diklatI'),
		'jam_diklatI'=>$this->input->post('jam_diklatI'),
		'tgl_diklatI'=>$this->input->post('tgl_diklatI'),
		'tahun_diklatI'=>$this->input->post('tahun_diklatI'),
		'angkatan_diklatI'=>$this->input->post('angkatan_diklatI'),
		'no_diklatI'=>$this->input->post('no_diklatI'),
		'penyelenggara_diklatI'=>$this->input->post('penyelenggara_diklatI'),
		'tempat_diklatI'=>$this->input->post('tempat_diklatI'),
		'diklatII'=>$this->input->post('diklatII'),
		'jam_diklatII'=>$this->input->post('jam_diklatII'),
		'tgl_diklatII'=>$this->input->post('tgl_diklatII'),
		'tahun_diklatII'=>$this->input->post('tahun_diklatII'),
		'angkatan_diklatII'=>$this->input->post('angkatan_diklatII'),
		'no_diklatII'=>$this->input->post('no_diklatII'),
		'penyelenggara_diklatII'=>$this->input->post('penyelenggara_diklatII'),
		'tempat_diklatII'=>$this->input->post('tempat_diklatII'),

    'diklatIII'=>$this->input->post('diklatIII'),
    'jam_diklatIII'=>$this->input->post('jam_diklatIII'),
    'tgl_diklatIII'=>$this->input->post('tgl_diklatIII'),
    'tahun_diklatIII'=>$this->input->post('tahun_diklatIII'),
    'angkatan_diklatIII'=>$this->input->post('angkatan_diklatIII'),
    'no_diklatIII'=>$this->input->post('no_diklatIII'),
    'penyelenggara_diklatIII'=>$this->input->post('penyelenggara_diklatIII'),
    'tempat_diklatIII'=>$this->input->post('tempat_diklatIII'),
    'diklatIV'=>$this->input->post('diklatIV'),
    'jam_diklatIV'=>$this->input->post('jam_diklatIV'),
    'tgl_diklatIV'=>$this->input->post('tgl_diklatIV'),
    'tahun_diklatIV'=>$this->input->post('tahun_diklatIV'),
    'angkatan_diklatIV'=>$this->input->post('angkatan_diklatIV'),
    'no_diklatIV'=>$this->input->post('no_diklatIV'),
    'penyelenggara_diklatIV'=>$this->input->post('penyelenggara_diklatIV'),
    'tempat_diklatIV'=>$this->input->post('tempat_diklatIV'));
      $cek=$this->db->insert('diklat_struktural',$inputData);
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Ditambahkan.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/diklat/diklatstruktural'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/diklat/diklatstruktural2_form',$x);
    }
  }
    	
  public function diklat_edit($id='')
  {
  $sql=$this->db->get_where('diklat_struktural',array('id_diklatstruktural'=>$id))->row_array(); 
  $x = array('judul'        =>'Edit Data Riwayat Diklat Struktural' ,
              'aksi'        =>'edit',
        'nip'=>$sql['nip'],
        'nama'=>$sql['nama'],
        'diklatI'=>$sql['diklatI'],
        'jam_diklatI'=>$sql['jam_diklatI'],
        'tgl_diklatI'=>$sql['tgl_diklatI'],
        'tahun_diklatI'=>$sql['tahun_diklatI'],
        'angkatan_diklatI'=>$sql['angkatan_diklatI'],
        'no_diklatI'=>$sql['no_diklatI'],
        'penyelenggara_diklatI'=>$sql['penyelenggara_diklatI'],
        'tempat_diklatI'=>$sql['tempat_diklatI'],
        'diklatII'=>$sql['diklatII'],
        'jam_diklatII'=>$sql['jam_diklatII'],
        'tgl_diklatII'=>$sql['tgl_diklatII'],
        'tahun_diklatII'=>$sql['tahun_diklatII'],
        'angkatan_diklatII'=>$sql['angkatan_diklatII'],
        'no_diklatII'=>$sql['no_diklatII'],
        'penyelenggara_diklatII'=>$sql['penyelenggara_diklatII'],
        'tempat_diklatII'=>$sql['tempat_diklatII'],

        'diklatIII'=>$sql['diklatIII'],
        'jam_diklatIII'=>$sql['jam_diklatIII'],
        'tgl_diklatIII'=>$sql['tgl_diklatIII'],
        'tahun_diklatIII'=>$sql['tahun_diklatIII'],
        'angkatan_diklatIII'=>$sql['angkatan_diklatIII'],
        'no_diklatIII'=>$sql['no_diklatIII'],
        'penyelenggara_diklatIII'=>$sql['penyelenggara_diklatIII'],
        'tempat_diklatIII'=>$sql['tempat_diklatIII'],

        'diklatIV'=>$sql['diklatIV'],
        'jam_diklatIV'=>$sql['jam_diklatIV'],
        'tgl_diklatIV'=>$sql['tgl_diklatIV'],
        'tahun_diklatIV'=>$sql['tahun_diklatIV'],
        'angkatan_diklatIV'=>$sql['angkatan_diklatIV'],
        'no_diklatIV'=>$sql['no_diklatIV'],
        'penyelenggara_diklatIV'=>$sql['penyelenggara_diklatIV'],
        'tempat_diklatIV'=>$sql['tempat_diklatIV'],
      );

    if(isset($_POST['kirim'])){
      $inputData=array(
        'nip'=>$this->input->post('nip'),
        'nama'=>$this->input->post('nama'),
        'diklatI'=>$this->input->post('diklatI'),
        'jam_diklatI'=>$this->input->post('jam_diklatI'),
        'tgl_diklatI'=>$this->input->post('tgl_diklatI'),
        'tahun_diklatI'=>$this->input->post('tahun_diklatI'),
        'angkatan_diklatI'=>$this->input->post('angkatan_diklatI'),
        'no_diklatI'=>$this->input->post('no_diklatI'),
        'penyelenggara_diklatI'=>$this->input->post('penyelenggara_diklatI'),
        'tempat_diklatI'=>$this->input->post('tempat_diklatI'),
        
        'diklatII'=>$this->input->post('diklatII'),
        'jam_diklatII'=>$this->input->post('jam_diklatII'),
        'tgl_diklatII'=>$this->input->post('tgl_diklatII'),
        'tahun_diklatII'=>$this->input->post('tahun_diklatII'),
        'angkatan_diklatII'=>$this->input->post('angkatan_diklatII'),
        'no_diklatII'=>$this->input->post('no_diklatII'),
        'penyelenggara_diklatII'=>$this->input->post('penyelenggara_diklatII'),
        'tempat_diklatII'=>$this->input->post('tempat_diklatII'),

        'diklatIII'=>$this->input->post('diklatIII'),
        'jam_diklatIII'=>$this->input->post('jam_diklatIII'),
        'tgl_diklatIII'=>$this->input->post('tgl_diklatIII'),
        'tahun_diklatIII'=>$this->input->post('tahun_diklatIII'),
        'angkatan_diklatIII'=>$this->input->post('angkatan_diklatIII'),
        'no_diklatIII'=>$this->input->post('no_diklatIII'),
        'penyelenggara_diklatIII'=>$this->input->post('penyelenggara_diklatIII'),
        'tempat_diklatIII'=>$this->input->post('tempat_diklatIII'),
        
        'diklatIV'=>$this->input->post('diklatIV'),
        'jam_diklatIV'=>$this->input->post('jam_diklatIV'),
        'tgl_diklatIV'=>$this->input->post('tgl_diklatIV'),
        'tahun_diklatIV'=>$this->input->post('tahun_diklatIV'),
        'angkatan_diklatIV'=>$this->input->post('angkatan_diklatIV'),
        'no_diklatIV'=>$this->input->post('no_diklatIV'),
        'penyelenggara_diklatIV'=>$this->input->post('penyelenggara_diklatIV'),
        'tempat_diklatIV'=>$this->input->post('tempat_diklatIV'));

      $cek=$this->db->update('diklat_struktural',$inputData,array('id_diklatstruktural'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/diklatstruktural_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/diklat/diklatstrukturalread2_form',$x);
    }
  }

  public function diklat_detail($id='')
  {
  $sql=$this->db->get_where('diklat_struktural',array('id_diklatstruktural'=>$id))->row_array(); 
  $x = array('judul'        =>'Detail Riwayat Data Diklat Struktural' ,
              'aksi'        =>'detail',
    'nip'=>$sql['nip'],
    'nama'=>$sql['nama'],
    'diklatI'=>$sql['diklatI'],
    'jam_diklatI'=>$sql['jam_diklatI'],
    'tgl_diklatI'=>$sql['tgl_diklatI'],
    'tahun_diklatI'=>$sql['tahun_diklatI'],
    'angkatan_diklatI'=>$sql['angkatan_diklatI'],
    'no_diklatI'=>$sql['no_diklatI'],
    'penyelenggara_diklatI'=>$sql['penyelenggara_diklatI'],
    'tempat_diklatI'=>$sql['tempat_diklatI'],

    'diklatII'=>$sql['diklatII'],
    'jam_diklatII'=>$sql['jam_diklatII'],
    'tgl_diklatII'=>$sql['tgl_diklatII'],
    'tahun_diklatII'=>$sql['tahun_diklatII'],
    'angkatan_diklatII'=>$sql['angkatan_diklatII'],
    'no_diklatII'=>$sql['no_diklatII'],
    'penyelenggara_diklatII'=>$sql['penyelenggara_diklatII'],
    'tempat_diklatII'=>$sql['tempat_diklatII'],

    'diklatIII'=>$sql['diklatIII'],
    'jam_diklatIII'=>$sql['jam_diklatIII'],
    'tgl_diklatIII'=>$sql['tgl_diklatIII'],
    'tahun_diklatIII'=>$sql['tahun_diklatIII'],
    'angkatan_diklatIII'=>$sql['angkatan_diklatIII'],
    'no_diklatIII'=>$sql['no_diklatIII'],
    'penyelenggara_diklatIII'=>$sql['penyelenggara_diklatIII'],
    'tempat_diklatIII'=>$sql['tempat_diklatIII'],

    'diklatIV'=>$sql['diklatIV'],
    'jam_diklatIV'=>$sql['jam_diklatIV'],
    'tgl_diklatIV'=>$sql['tgl_diklatIV'],
    'tahun_diklatIV'=>$sql['tahun_diklatIV'],
    'angkatan_diklatIV'=>$sql['angkatan_diklatIV'],
    'no_diklatIV'=>$sql['no_diklatIV'],
    'penyelenggara_diklatIV'=>$sql['penyelenggara_diklatIV'],
    'tempat_diklatIV'=>$sql['tempat_diklatIV']
  ); 
    if(isset($_POST['kirim'])){
      $inputData=array(
    'nip'=>$this->input->post('nip'),
    'nama'=>$this->input->post('nama'),

    'diklatI'=>$this->input->post('diklatI'),
    'jam_diklatI'=>$this->input->post('jam_diklatI'),
    'tgl_diklatI'=>$this->input->post('tgl_diklatI'),
    'tahun_diklatI'=>$this->input->post('tahun_diklatI'),
    'angkatan_diklatI'=>$this->input->post('angkatan_diklatI'),
    'no_diklatI'=>$this->input->post('no_diklatI'),
    'penyelenggara_diklatI'=>$this->input->post('penyelenggara_diklatI'),
    ' tempat_diklatI'=>$this->input->post(' tempat_diklatI'),

    'diklatII'=>$this->input->post('diklatII'),
    'jam_diklatII'=>$this->input->post('jam_diklatII'),
    'tgl_diklatII'=>$this->input->post('tgl_diklatII'),
    'tahun_diklatII'=>$this->input->post('tahun_diklatII'),
    'angkatan_diklatII'=>$this->input->post('angkatan_diklatII'),
    'no_diklatII'=>$this->input->post('no_diklatII'),
    'penyelenggara_diklatII'=>$this->input->post('penyelenggara_diklatII'),
    ' tempat_diklatII'=>$this->input->post(' tempat_diklatII'),

    'diklatIII'=>$this->input->post('diklatIII'),
    'jam_diklatIII'=>$this->input->post('jam_diklatIII'),
    'tgl_diklatIII'=>$this->input->post('tgl_diklatIII'),
    'tahun_diklatIII'=>$this->input->post('tahun_diklatIII'),
    'angkatan_diklatIII'=>$this->input->post('angkatan_diklatIII'),
    'no_diklatIII'=>$this->input->post('no_diklatIII'),
    'penyelenggara_diklatIII'=>$this->input->post('penyelenggara_diklatIII'),
    ' tempat_diklatIII'=>$this->input->post(' tempat_diklatIII'),

    'diklatIV'=>$this->input->post('diklatIV'),
    'jam_diklatIV'=>$this->input->post('jam_diklatIV'),
    'tgl_diklatIV'=>$this->input->post('tgl_diklatIV'),
    'tahun_diklatIV'=>$this->input->post('tahun_diklatIV'),
    'angkatan_diklatIV'=>$this->input->post('angkatan_diklatIV'),
    'no_diklatIV'=>$this->input->post('no_diklatIV'),
    'penyelenggara_diklatIV'=>$this->input->post('penyelenggara_diklatIV'),
    ' tempat_diklatIV'=>$this->input->post(' tempat_diklatIV')
        );
      $cek=$this->db->update('diklat_struktural',$inputData,array('id_diklatstruktural'=>$id));
      if($cek){
        $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Diedit.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/diklat/diklatstruktural_read'));
      }else{
       echo "ERROR input Data";
      }
    }else{
     tpl('admin/diklat/diklatstruktural_form',$x);
    }
  }

  
  public function diklat_hapus($id='')
  {
   $cek=$this->db->delete('diklat_struktural',array('id_diklatstruktural'=>$id));
   if ($cek) {
    $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
               Data Berhasil Di Hapus.
              </div>';
    $this->session->set_flashdata('pesan',$pesan);
    redirect(base_url('admin/diklat/diklatstruktural'));
   }
  }



public function keluar($value='')
{

$this->session->sess_destroy();
echo "<scrip>alert('Anda Telah Keluar Dari Halaman Administrator')</script>";;
redirect(base_url(''));
}
  
}