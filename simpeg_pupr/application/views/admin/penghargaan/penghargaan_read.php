<a href="penghargaan_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button></a>
<form action="" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
    <table id="example1" class="table table-striped table-bordered text-left">
		<?php foreach($data as $admin){ ?>
		<tr>
		<td width="200">Nama Pegawai</td>
		<td width="10">:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>Nomor SK Penghargaan</td>
		<td>:</td>
		<td><?= $admin['no_skpenghargaan'] ?></td>
		</tr>
		<tr>
		<td>Tanggal SK Penghargaan</td>
		<td>:</td>
		<td><?= $admin['tgl_skpenghargaan'] ?></td>
		</tr>
		<tr>
		<td>Asal SK Penghargaan</td>
		<td>:</td>
		<td><?= $admin['asal_skpenghargaan'] ?></td>
		</tr>
		<tr>
			<a href="<?= base_url('admin/penghargaan_edit/'.$admin['id_penghargaan']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a> </td>
		</tr>
		<?php }; ?>
    </table>
</form>


<html lang="en">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<a href="penghargaan_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button></a>
<a href="<?= base_url('admin/penghargaan_edit/'.$admin['id_penghargaan']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a> </td>
<br>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Form Tambah Data Penghargaan</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="<?= base_url() ?>/admin/proses" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Pegawai</label>
            <input type="text" name="nama[]" class="form-control">
            <label>Nomor SK Penghargaan</label>
            <input type="text" name="no_skpenghargaan[]" class="form-control">
            <label>Tanggal SK Penghargaan</label>
            <input type="text" name="tgl_skpenghargaan[]" class="form-control">
            <label>Asal SK Penghargaan</label>
            <input type="text" name="asal_skpenghargaan[]" class="form-control">
            <br>
            <button class="btn btn-success add-more" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <hr>
          </div>
          <button class="btn btn-primary" type="submit" name="kirim" value="Submit">Submit</button>
        </form>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
        <div class="copy hide">
            <div class="control-group">
              <label>Nama Pegawai</label>
              <input type="text" name="nama[]" class="form-control">
              <label>Nomor SK Penghargaan</label>
              <input type="text" name="no_skpenghargaan[]" class="form-control">
              <label>Tanggal SK Penghargaan</label>
              <input type="text" name="tgl_skpenghargaan[]" class="form-control">
              <label>Asal SK Penghargaan</label>
              <input type="text" name="asal_skpenghargaan[]" class="form-control">
              <br>
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              <hr>
            </div>
          </div>
        </div>
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