<?php
$id  = $this->session->userdata('id_admin');
 $tr= $this->db->get_where('admin',array('id_admin'=>$id))->row_array();
?>

<div class="container">
	<a href="jabatan_read">
		<button onClick="window.print();" class="btn btn-warning"> <i class="fa fa-print"></i> Print Data</button>
	</a>
	
		<?php foreach($data as $admin){ ?>
			<form action="" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
				<table id="example1" class="table table-striped table-bordered text-left">
					<tr>
					<td width="100">NAMA</td>
					<td width="10">:</td>
					<td><?= $admin['nama'] ?></td>
					</tr>
					<tr>
					<td>NAMA JABATAN</td>
					<td>:</td>
					<td><?= $admin['nama_jabatan'] ?></td>
					</tr>
					<tr>
					<td>ESELON</td>
					<td>:</td>
					<td><?= $admin['eselon'] ?></td>
					</tr>
					<tr>
					<td>TMT JABATAN</td>
					<td>:</td>
					<td><?= $admin['tmt_jabatan'] ?></td>
					</tr>
				</table>
				    <td>
						<a href="<?= base_url('admin/jabatan_edit/'.$admin['id_jabatan']) ?>" class="btn btn-info"> <i class="fa fa-edit"></i>Edit</a>
						<a href="<?= base_url('admin/jabatan_hapus/'.$admin['id_jabatan']) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
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
    <div class="panel-heading">Form Tambah Data Jabatan</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="<?= base_url() ?>admin/jabatan_add" method="POST">
          <div class="control-group after-add-more">
            <label>Id Pegawai</label>
            <!-- <input type="text" name="nama[]" class="form-control"> -->
            <input type="text" name="id_admin" class="form-control" value="<?= $tr['id_admin'] ?>" readonly>
            <label>Nama Pegawai</label>
            <!-- <input type="text" name="nama[]" class="form-control"> -->
            <input type="text" name="nama_pegawai" class="form-control" value="<?= $tr['nama'] ?>" readonly>
            <label>Nama Jabatan</label>
            <input type="text" name="nama_jabatan" class="form-control">
            <label>Eselon</label>
			<td><select class="form-control" name="eselon">
							  <option value="II/A">II/A</option>
	                          <option value="II/B">II/B</option>
							  <option value="III/A">III/A</option>
	                          <option value="III/B">III/B</option>
							  <option value="IV/A">IV/A</option>
	                          <option value="IV/B">IV/B</option>
                              </select></td>
            <label>TMT Jabatan</label>
            <input type="date" name="tmt_jabatan" class="form-control">
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