<table class="table table-striped">
<form action="" method="POST" enctype="multipart/form-data"> 
	<select class="form-control select2" name="id_admin" style="width: 100%;" required="">
		<option selected="selected" disabled>Cari Nama</option>
		<?php foreach ($data_pegawai as $value) {
			echo '<option value="'.$value->id_admin.'">'.$value->nama.'</option>';
		} ?>
	</select>
	<label>Nama Diklat</label>
	<input type="text" name="nama_diklat" class="form-control" required>
	<label>Jam Diklat</label>
	<input type="time" name="jam_diklat" class="form-control" required>
	<label>Tanggal Diklat</label>
	<input type="date" name="tgl_diklat" class="form-control" required>
	<label>Tahun Diklat</label>
	<input type="number" name="tahun_diklat" class="form-control" required>
	<label>Angkatan Diklat</label>
	<input type="text" name="angkatan_diklat" class="form-control" required>
	<label>No Diklat</label>
	<input type="text" name="no_diklat" class="form-control" required>
	<label>Penyelenggara Diklat</label>
	<select name="penyelenggara_diklat" class="form-control" required>
		<option value="" selected disabled>Pilih Penyelenggara Diklat</option>
		<option value="Bandiklat">Bandiklat</option>
		<option value="Diklat Prov.">Diklat Prov.</option>
	</select>
	<!--<input type="text" name="penyelenggara_diklat" class="form-control" required>-->
	<label>Tempat Diklat</label>
	<input type="text" name="tempat_diklat" class="form-control" required>
	<br>


<?php
	$disabled = "";
	if($aksi == "edit"){
		$disabled = "disabled";
	}
?>
<input type="submit" name="kirim" value="Submit" class="btn btn-primary"> <a href="<?= base_url('admin/diklatstruktural') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a>
</form>
</table>
<?php 
if($aksi == "edit"):
?>	
<span><i></i></span>
<?php endif; ?>