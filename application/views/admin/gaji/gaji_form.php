<?php // json_encode($this->session->all_userdata()) ?>
<table class="table table-responsive">
	<form action="" method="POST">
	<tr>
		<th>Nama Pegawai</th>
		<td>
			<div class="box-body">
				<div class="row">
					<div class="">
						<select class="form-control select2" name="id_admin" style="width: 100%;" required="">
							<option selected="selected" disabled>Cari Nama</option>
							<?php foreach ($data_pegawai as $value) {
								echo '<option value="'.$value->id_admin.'">'.$value->nama.'</option>';
							} ?>
						</select>
					</div>
				</div>
			</div>
		</td>
	</tr>
	
	<tr><th>Pejabat yang menetapkan</th><td><select class="form-control" name="pejabat_ygmenetapkan" required="">
	                          <option value="Kaban BKDPP Jombang">Kaban BKDPP Jombang</option><th class="text-danger" >***</th></tr>

	<tr><th>Nomor</th><td><input type="text" name="nomor" value="<?= $nomor ?>" class="form-control"></td><th class="text-danger" >***</th></tr>
	<tr><th>Tanggal Surat</th><td><input type="date" name="tgl_surat" class="form-control" value="<?= $tgl_surat ?>"></td><th class="text-danger" >***</th></tr>
	<tr><th>Gaji Pokok</th><td><input type="number" name="gaji_pokok" value="<?= $gaji_pokok ?>" class="form-control"></td><th class="text-danger" >***</th></tr>
    <tr><th>T.M.T KGB</th><td><input type="date" name="tmt_kgb" class="form-control" value="<?= $tmt_kgb ?>"></td><th class="text-danger" >***</th></tr>
	<tr><th>Tahun</th><td><input type="text" name="tahun" class="form-control" value="<?= $tahun ?>"></td><th class="text-danger" >***</th></tr>
	<tr><th>Bulan</th><td><select class="form-control" name="bulan" required="">
	                          <option value="Januari">Januari</option>
	                          <option value="Februari">Februari</option>
							  <option value="Maret">Maret</option>
							  <option value="April">April</option>
							  <option value="Mei">Mei</option>
	                          <option value="Juni">Juni</option>
							  <option value="Juli">Juli</option>
							  <option value="Agustus">Agustus</option>
							  <option value="September">September</option>
	                          <option value="Oktober">Oktober</option>
							  <option value="November">November</option>
							  <option value="Desember">Desember</option>
	</select></td><th class="text-danger" >***</th></tr>
    <tr><td></td><th><input type="submit" name="kirim" value="Set Gaji" class="btn btn-primary"> <a href="<?= base_url('admin/gaji') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>
    <tr><td></td><td>
</table>
 </form>