<?php
$id  = $this->session->userdata('id_admin');
 $tr= $this->db->get_where('admin',array('id_admin'=>$id))->row_array();
?>

<div class="container">
	<a href="diklatstruktural_read">
		<button onClick="window.print();" class="btn btn-warning"> <i class="fa fa-print"></i> Print Data</button>
	</a>
	
		<?php foreach($data as $admin){ ?>
			<form action="" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
				<table id="example1" class="table table-striped table-bordered text-left">
					<tr>
					<td width="100">Nama Diklat</td>
					<td width="10">:</td>
					<td><?= $admin['nama_diklat'] ?></td>
					</tr>
					<tr>
					<td>Jam Diklat</td>
					<td>:</td>
					<td><?= $admin['jam_diklat'] ?></td>
					</tr>
					<tr>
					<td>Tanggal Diklat</td>
					<td>:</td>
					<td><?= $admin['tgl_diklat'] ?></td>
					</tr>
					<tr>
					<td>Tahun Diklat</td>
					<td>:</td>
					<td><?= $admin['tahun_diklat'] ?></td>
					</tr>
					<tr>
					<td>Angkatan Diklat</td>
					<td>:</td>
					<td><?= $admin['angkatan_diklat'] ?></td>
					</tr>
					<tr>
					<td>No Diklat</td>
					<td>:</td>
					<td><?= $admin['no_diklat'] ?></td>
					</tr>
					<tr>
					<td>Penyelenggara Diklat</td>
					<td>:</td>
					<td><?= $admin['penyelenggara_diklat'] ?></td>
					</tr>
					<tr>
					<td>Tempat Diklat</td>
					<td>:</td>
					<td><?= $admin['tempat_diklat'] ?></td>
					</tr>
				</table>
				    <td>
						<a href="<?= base_url('admin/diklat_edit/'.$admin['id_diklatstruktural']) ?>" class="btn btn-info"> <i class="fa fa-edit"></i>Edit</a>
						<a href="<?= base_url('admin/diklat_hapus/'.$admin['id_diklatstruktural']) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
						<hr>
					</td>
			</form>
		<?php }; ?>
</div>

<html lang="en">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Form Tambah Data Riwayat Diklat Struktural</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="<?= base_url() ?>admin/diklat_add" method="POST">
          <div class="control-group after-add-more">
            <label>Id Pegawai</label>
            <input type="text" name="id_admin" class="form-control" value="<?= $tr['id_admin'] ?>" readonly>
			<label>Nama Pegawai</label>
            <input type="text" name="nama_pegawai" class="form-control" value="<?= $tr['nama'] ?>" readonly>
            <label>Nama Diklat</label>
            <input type="text" name="nama_diklat" class="form-control">
			<label>Jam Diklat</label>
            <input type="time" name="jam_diklat" class="form-control">
			<label>Tanggal Diklat</label>
            <input type="date" name="tgl_diklat" class="form-control">
			<label>Tahun Diklat</label>
            <input type="year" name="tahun_diklat" class="form-control">
			<label>Angkatan Diklat</label>
            <input type="text" name="angkatan_diklat" class="form-control">
			<label>No Diklat</label>
            <input type="text" name="no_diklat" class="form-control">
			<label>Penyelenggara Diklat</label>
			<td><select class="form-control" name="penyelenggara_diklat">
							  <option value="" selected disabled>Pilih Penyelenggara Diklat</option>
							  <option value="Bandiklat">Bandiklat</option>
	                          <option value="Diklat Prov.">Diklat Prov.</option>
                              </select></td>
			<label>Tempat Diklat</label>
            <input type="text" name="tempat_diklat" class="form-control">

            <br>
            <button class="btn btn-success add-more" name="kirim" type="submit">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <hr>
          </div>
        </form>

    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body>
</html>