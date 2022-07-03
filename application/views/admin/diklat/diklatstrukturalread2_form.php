<table class="table table-responsive">
<form action="<?= base_url() ?>admin/diklat_edit_submit" method="post"> 
	<tr><th>Nama Diklat</th><td><input type="text" name="nama_diklat" class="form-control" value="<?= $nama_diklat ?>" required></td><th class="text-danger" >***</th></tr>
	<tr><th>Jam Diklat</th><td><input type="time" name="jam_diklat" class="form-control" value="<?= $jam_diklat ?>" required></td></tr>
	<tr><th>Tanggal Diklat</th><td><input type="date" name="tgl_diklat" class="form-control" value="<?= $tgl_diklat ?>" required></td></tr>
	<tr><th>Tahun Diklat</th><td><input type="text" name="tahun_diklat" class="form-control" value="<?= $tahun_diklat ?>" required></td></tr>
	<tr><th>Angkatan Diklat</th><td><input type="text" name="angkatan_diklat" class="form-control" value="<?= $angkatan_diklat ?>" required></td></tr>
	<tr><th>No Diklat</th><td><input type="text" name="no_diklat" class="form-control" value="<?= $no_diklat ?>" required></td></tr>
	<tr><th>Penyelenggara Diklat</th><td><input type="text" name="penyelenggara_diklat" class="form-control" value="<?= $penyelenggara_diklat ?>" required></td></tr>
	<tr><th>Tempat Diklat</th><td><input type="text" name="tempat_diklat" class="form-control" value="<?= $tempat_diklat ?>" required></td></tr>


<?php
// 	$disabled = "";
// 	if($aksi == "edit"){
// 		$disabled = "disabled";
// 	}
?>
<tr><td></td><th><button type="submit" name="kirim" value="Submit" class="btn btn-primary"> Simpan </button> <a href="<?= base_url('admin/diklatstruktural_read') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>

</form>
</table>
<?php 
// if($aksi == "edit"):
?>	
<span><i></i></span>
<?php // endif; ?>
