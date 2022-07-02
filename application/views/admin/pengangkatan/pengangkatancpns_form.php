<table class="table table-reposive">
	<?php 
		if($aksi == 'edit'){
			echo '<form action="'. base_url() .'admin/pengangkatancpns_edit/'.$id_angkat_cpns.'" method="POST" enctype="multipart/form-data">';
		}else{
			echo '<form action="'. base_url() .'admin/pengangkatancpns_tambah" method="POST" enctype="multipart/form-data">';

			}
	?>
	
	<!-- <tr><th>Tanggal Persetujuan BAKN</th><td><input type="date" name="tgl_persetujuan_bakn" class="form-control" value="<?= $tgl_persetujuan_bakn ?>" required=""></td><th class="text-danger" >***</th></tr> -->
	
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
	
	<!-- <tr><th>Nomor Nota Persetujuan BAKN</th><td><input type="text" name="no_nota_persetujuan_bakn" class="form-control" value="<?= $no_nota_persetujuan_bakn ?>" required=""></td><th class="text-danger" >***</th></tr> -->
	<!-- <tr><th>Pejabat yang menetapkan</th><td><select class="form-control" name="pejabat_ygmenetapkan" required="">
	                          <option value="Bupati Jombang">Bupati Jombang</option>
	                          <option value="-">-</option>
							  </select></td><th class="text-danger">***</th></tr> -->

	<tr><th>Nomor SK CPNS</th><td><input type="text" name="no_sk_cpns" class="form-control" value="<?= $no_sk_cpns ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>Tanggal SK CPNS</th><td><input type="date" name="tgl_sk_cpns" class="form-control" value="<?= $tgl_sk_cpns ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>Gaji</th><td><input type="text" name="gaji" class="form-control" value="<?= $gaji ?>" required=""></td><th class="text-danger">***</th></tr>
	<!-- <tr><th>Ijazah</th><td><select class="form-control" name="ijazah" required="">
	                          <option value="SD/MI">SD/MI</option>
	                          <option value="SMP/MTS">SMP/MTS</option>
							  <option value="SMA/MA">SMA/MA</option>
							  <option value="D3">D3</option>
							  <option value="S1">S1</option>
	                          <option value="S2">S2</option>
							  </select></td><th class="text-danger">***</th></tr>
	<tr><th>Tahun Ijazah</th><td><input type="text" name="ijazah_tahun" class="form-control" value="<?= $ijazah_tahun ?>" required=""></td><th class="text-danger">***</th></tr> -->
	<tr><th>Golongan Ruang</th><td><select class="form-control" name="gol_ruang" required="">
	                          <option value="I/A">I/A</option>
	                          <option value="I/B">I/B</option>
							  <option value="I/C">I/C</option>
							  <option value="I/D">I/D</option>
							  <option value="II/A">II/A</option>
	                          <option value="II/B">II/B</option>
							  <option value="II/C">II/C</option>
							  <option value="II/D">II/D</option>
							  <option value="III/A">III/A</option>
	                          <option value="III/B">III/B</option>
							  <option value="III/C">III/C</option>
							  <option value="III/D">III/D</option>
							  <option value="IV/A">IV/A</option>
	                          <option value="IV/B">IV/B</option>
							  <option value="IV/C">IV/C</option>
							  <option value="IV/D">IV/D</option>
							  </select></td><th class="text-danger">***</th></tr>
	<tr><th>T.M.T CPNS</th><td><input type="date" name="tmt_cpns" class="form-control" value="<?= $tmt_cpns ?>" required=""></td><th class="text-danger">***</th></tr>
	<!-- <tr><th>Bulan</th><td><select class="form-control" name="bulan" required="">
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
							  </select></td><th class="text-danger">***</th></tr> -->
	<tr><th>Jabatan</th><td><input type="text" name="jabatan" class="form-control" value="<?= $jabatan ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>OPD</th><td><input type="text" name="opd" class="form-control" value="<?= $opd ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>T.M.T SPMT</th><td><input type="date" name="tmt_spmt" class="form-control" value="<?= $tmt_spmt ?>" required=""></td><th class="text-danger">***</th></tr>
	<!-- <tr><th>Tahun + MK</th><td><input type="teks" name="tahun_tambah_mk" class="form-control" value="<?= $tahun_tambah_mk ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>Bulan + MK</th><td><select class="form-control" name="bulan_tambah_mk" required="">
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
							  </select></td><th class="text-danger">***</th></tr> -->
	<tr><th>Bukti Pengangkatan</th><td>
	<?php 
      if($aksi == "Edit"){
        echo '<img src="'.base_url('template/data/'.$foto).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?>
<input type="file" name="gambar" value="<?= $foto ?>" class="form-control" accept=".pdf" required="">
</td><th class="text-danger">***</th></tr>
    <tr><td></td><td><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> &nbsp;&nbsp; <a href="<?= base_url('admin/pengangkatancpns') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></td></tr>
	</form>	 
</table>
 
 