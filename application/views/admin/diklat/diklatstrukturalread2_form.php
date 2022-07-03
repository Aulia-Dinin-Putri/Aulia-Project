<table class="table table-reposive">
	<form action="" method="POST">
	<tr><th>Nama Diklat</th><td><input type="text" name="nama_diklat" class="form-control" value="<?= $nama_diklat ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>Jam Diklat</th><td><input type="time" name="jam_diklat" class="form-control" value="<?= $jam_diklat ?>" ></td></tr>
	<tr><th>Tanggal Diklat</th><td><input type="date" name="tgl_diklat" class="form-control" value="<?= $tgl_diklat ?>"></td></tr>
	<tr><th>Tahun Diklat</th><td><input type="year" name="tahun_diklat" class="form-control" value="<?= $tahun_diklat ?>"></td></tr>
	<tr><th>Angkatan Diklat</th><td><input type="text" name="angkatan_diklat" class="form-control" value="<?= $angkatan_diklat ?>"></td></tr>
	<tr><th>No Diklat</th><td><input type="text" name="no_diklat" class="form-control" value="<?= $no_diklat ?>"></td></tr>
	<tr><th>Penyelenggara Diklat</th><td><select class="form-control" name="penyelenggara_diklat">
							  <option value="" selected disabled>Pilih Penyelenggara Diklat</option>
							  <option value="Bandiklat">Bandiklat</option>
	                          <option value="Diklat Prov.">Diklat Prov.</option>
                              </select></td></tr>
	<tr><th>Tempat Diklat</th><td><input type="text" name="tempat_diklat" class="form-control" value="<?= $tempat_diklat ?>"></td></tr>
    <tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> <a href="<?= base_url('admin/diklatstruktural_read') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>
    </form>	 
</table>
 
 