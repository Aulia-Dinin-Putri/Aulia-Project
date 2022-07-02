<table class="table table-striped">
<form action="" method="POST" enctype="multipart/form-data"> 
	<tr><th>Nama Diklat</th><td><input type="text" name="diklat" class="form-control" value="<?= $diklat ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Jam Diklat</th><td><input type="text" name="jam_diklat" class="form-control" value="<?= $jam_diklat ?>"></td></tr>
	<tr><th>Tanggal Diklat</th><td><input type="text" name="tgl_diklat" class="form-control" value="<?= $tgl_diklat ?>"></td></tr>
	<tr><th>Tahun Diklat</th><td><input type="text" name="tahun_diklat" class="form-control" value="<?= $tahun_diklat ?>"></td></tr>
	<tr><th>Angkatan Diklat</th><td><input type="text" name="angkatan_diklat" class="form-control" value="<?= $angkatan_diklat ?>"></td></tr>
	<tr><th>No Diklat</th><td><input type="text" name="no_diklat" class="form-control" value="<?= $no_diklat ?>"></td></tr>
	<tr><th>Penyelenggara Diklat</th><td><input type="text" name="penyelenggara_diklat" class="form-control" value="<?= $penyelenggara_diklat ?>"></td></tr>
	<tr><th>Tempat Diklat</th><td><input type="text" name="tempat_diklat" class="form-control" value="<?= $tempat_diklat ?>"></td></tr>

<?php
	$disabled = "";
	if($aksi == "edit"){
		$disabled = "disabled";
	}
?>
<tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> <a href="<?= base_url('admin/diklatstruktural') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>

</form>
</table>
<?php 
if($aksi == "edit"):
?>	
<span><i></i></span>
<?php endif; ?>
