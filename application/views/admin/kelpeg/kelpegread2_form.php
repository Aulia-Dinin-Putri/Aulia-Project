<table class="table table-striped">
<form action="" method="POST" enctype="multipart/form-data"> 
 
<tr><th>Nama Pegawai</th><td><input type="text" name="nama" class="form-control" value="<?= $nama ?>" disabled required=""></td></tr>
<tr><th>Nama Ayah</th><td><input type="text" name="nama_ayah" value="<?= $nama_ayah ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Tempat Lahir Ayah</th><td><input type="text" name="tempat_ayah" value="<?= $tempat_ayah ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Tanggal Lahir Ayah</th><td><input type="date" name="tgllahir_ayah" value="<?= $tgllahir_ayah ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Pekerjaan Ayah</th><td><input type="text" name="pekerjaan_ayah" value="<?= $pekerjaan_ayah ?>" class="form-control" required=""></td></tr>
<tr><th>Nama Ibu</th><td><input type="text" name="nama_ibu" value="<?= $nama_ibu ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Tempat Lahir Ibu</th><td><input type="text" name="tempat_ibu" value="<?= $tempat_ibu ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Tanggal Lahir Ibu</th><td><input type="date" name="tgllahir_ibu" value="<?= $tgllahir_ibu ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Pekerjaan Ibu</th><td><input type="text" name="pekerjaan_ibu" value="<?= $pekerjaan_ibu ?>" class="form-control" required=""></td></tr>
<tr><th>Nama Istri/Suami</th><td><input type="text" name="nama_is" value="<?= $nama_is ?>" class="form-control" required=""></td></tr>
<tr><th>Tempat Lahir Istri/Suami</th><td><input type="text" name="tempat_is" value="<?= $tempat_is ?>" class="form-control" required=""></td></tr>
<tr><th>Tanggal Lahir Istri/Suami</th><td><input type="date" name="tgllahir_is" value="<?= $tgllahir_is ?>" class="form-control" required=""></td></tr>
<tr><th>Tanggal Kawin</th><td><input type="date" name="tgl_kawin" value="<?= $tgl_kawin ?>" class="form-control" required=""></td></tr>
<tr><th>Pendidikan Akhir Istri/Suami</th><td><select class="form-control" name="pend_akhir" value="<?= $pend_akhir ?>" required="">
	                          <option value="SD/MI">SD/MI</option>
							  <option value="SMP/MTS">SMP/MTS</option>
							  <option value="SMA/MA">SMA/MA</option>
							  <option value="D3">D3</option>
							  <option value="S1">S1</option>
	                          <option value="S2">S2</option>
                              </select></td></tr>
<tr><th>Pekerjaan Istri/Suami</th><td><input type="text" name="pekerjaan_is" value="<?= $pekerjaan_is ?>" class="form-control" required=""></td></tr>
<tr><th>Nip Istri/Suami</th><td><input type="number" name="nip_is" value="<?= $nip_is ?>" class="form-control" required=""></td></tr>
<tr><th>Pangkat Istri/Suami</th><td><input type="text" name="pangkat" value="<?= $pangkat ?>" class="form-control" required=""></td></tr>
<tr><th>No KK</th><td><input type="number" name="no_kk" value="<?= $no_kk ?>" class="form-control" required=""></td></tr>
<tr><th>NIK Istri/Suami</th><td><input type="number" name="nik_is" value="<?= $nik_is ?>" class="form-control" required=""></td></tr>
<tr><th>OPD</th><td><input type="text" name="opd" value="<?= $opd ?>" class="form-control" required=""></td></tr>
<tr><th>Nama Anak</th><td><input type="text" name="nama_anak1" value="<?= $nama_anak1 ?>" class="form-control" required=""></td></tr>
<tr><th>Tempat Lahir Anak</th><td><input type="text" name="tempat_anak1" value="<?= $tempat_anak1 ?>" class="form-control" required=""></td></tr>
<tr><th>Tanggal Lahir Anak</th><td><input type="date" name="tgllahir_anak1" value="<?= $tgllahir_anak1 ?>" class="form-control" required=""></td></tr>
<tr><th>Pekerjaan Anak</th><td><input type="text" name="pekerjaan_anak1" value="<?= $pekerjaan_anak1 ?>" class="form-control" required=""></td></tr>
<tr><th>Status Anak</th><td><select class="form-control" name="status_anak1" value="<?= $status_anak1 ?>" required="">
	                          <option value="-">-</option>
							  <option value="AK">AK</option>
	                          <option value="AT">AT</option>
							  <option value="AA">AA</option>
                              </select></td></tr>
<tr><th>Pendidikan Anak</th><td><select class="form-control" name="pend_anak1" value="<?= $pend_anak1 ?>" required="">
	                          <option value="-">-</option>
							  <option value="SD">SD</option>
							  <option value="SMP">SMP</option>
							  <option value="SMA">SMA</option>
							  <option value="Perkuliahan">Perkuliahan</option>
							  </select></td></tr>
<tr><th>Jenis Kelamin Anak</th><td><select class="form-control" name="jk_anak1" value="<?= $jk_anak1 ?>" required="">
	                          <option value="-">-</option>
							  <option value="Laki-Laki">Laki-Laki</option>
	                          <option value="Perempuan">Perempuan</option>
                              </select></td></tr>
<!--<tr><th>Nama Anak-2</th><td><input type="text" name="nama_anak2" value="<?= $nama_anak2 ?>" class="form-control" required=""></td></tr>
<tr><th>Tempat Lahir Anak-2</th><td><input type="text" name="tempat_anak2" value="<?= $tempat_anak2 ?>" class="form-control" required=""></td></tr>
<tr><th>Tanggal Lahir Anak-2</th><td><input type="date" name="tgllahir_anak2" value="<?= $tgllahir_anak2 ?>" class="form-control" required=""></td></tr>
<tr><th>Pekerjaan Anak-2</th><td><input type="text" name="pekerjaan_anak2" value="<?= $pekerjaan_anak2 ?>" class="form-control" required=""></td></tr>
<tr><th>Status Anak-2</th><td><select class="form-control" name="status_anak2" value="<?= $status_anak2 ?>" required="">
	                          <option value="-">-</option>
							  <option value="AK">AK</option>
	                          <option value="AT">AT</option>
							  <option value="AA">AA</option>
                              </select></td></tr><tr><th>
<tr><th>Pendidikan Anak-2</th><td><select class="form-control" name="pend_anak2" value="<?= $pend_anak2 ?>" required="">
	                          <option value="-">-</option>
							  <option value="SD">SD</option>
							  <option value="SMP">SMP</option>
							  <option value="SMA">SMA</option>
							  <option value="Perkuliahan">Perkuliahan</option>
							  </select></td></tr>
<tr><th>Jenis Kelamin Anak-2</th><td><select class="form-control" name="jk_anak2" value="<?= $jk_anak2 ?>" required="">
	                          <option value="-">-</option>
							  <option value="Laki-Laki">Laki-Laki</option>
	                          <option value="Perempuan">Perempuan</option>
                              </select></td></tr>
<tr><th>Nama Anak-3</th><td><input type="text" name="nama_anak3" value="<?= $nama_anak3 ?>" class="form-control" required=""></td></tr>
<tr><th>Tempat Lahir Anak-3</th><td><input type="text" name="tempat_anak3" value="<?= $tempat_anak3 ?>" class="form-control" required=""></td></tr>
<tr><th>Tanggal Lahir Anak-3</th><td><input type="date" name="tgllahir_anak3" value="<?= $tgllahir_anak3 ?>" class="form-control" required=""></td></tr>
<tr><th>Pekerjaan Anak-3</th><td><input type="text" name="pekerjaan_anak3" value="<?= $pekerjaan_anak3 ?>" class="form-control" required=""></td></tr>
<tr><th>Status Anak-3</th><td><select class="form-control" name="status_anak3" value="<?= $status_anak3 ?>" required="">
	                          <option value="-">-</option>
							  <option value="AK">AK</option>
	                          <option value="AT">AT</option>
							  <option value="AA">AA</option>
                              </select></td></tr>
<tr><th>Pendidikan Anak-3</th><td><select class="form-control" name="pend_anak3" value="<?= $pend_anak3 ?>" required="">
	                          <option value="-">-</option>
							  <option value="SD">SD</option>
							  <option value="SMP">SMP</option>
							  <option value="SMA">SMA</option>
							  <option value="Perkuliahan">Perkuliahan</option>
							  </select></td></tr>
<tr><th>Jenis Kelamin Anak-3</th><td><select class="form-control" name="jk_anak3" value="<?= $jk_anak3 ?>" required="">
	                          <option value="-">-</option>
							  <option value="Laki-Laki">Laki-Laki</option>
	                          <option value="Perempuan">Perempuan</option>
                              </select></td></tr> -->

<?php
	$disabled = "";
	if($aksi == "edit"){
		$disabled = "disabled";
	}
?>
<tr><td></td><td><input type="submit" name="kirim" value="Submit" class="btn btn-primary">
	<a href="<?= base_url('admin/kelpeg_read') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a>
</td></tr>

</form>
</table>
<?php 
if($aksi == "edit"):
?>	
<span><i></i></span>
<?php endif; ?>