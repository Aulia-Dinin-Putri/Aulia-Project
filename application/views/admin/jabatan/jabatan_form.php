<table class="table table-reposive">
	<form action="" method="POST">
	<!--<tr><th>Nama Pegawai</th><td><input type="text" name="nama" class="form-control" value="<?= $nama ?>" required=""></td><th class="text-danger" >***</th></tr> -->
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
	<tr><th>Nama Jabatan</th><td><input type="text" name="nama_jabatan" class="form-control" value="<?= $nama_jabatan ?>" required=""></td><th class="text-danger">***</th></tr>
	<tr><th>Eselon</th><td><select class="form-control" name="eselon" required="">
							  <option value="II/A">II/A</option>
	                          <option value="II/B">II/B</option>
							  <option value="III/A">III/A</option>
	                          <option value="III/B">III/B</option>
							  <option value="IV/A">IV/A</option>
	                          <option value="IV/B">IV/B</option>
                              </select></td><th class="text-danger">***</th></tr>
	<tr><th>TMT Jabatan</th><td><input type="date" name="tmt_jabatan" class="form-control" value="<?= $tmt_jabatan ?>"></td></tr>
    <tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> <a href="<?= base_url('admin/jabatan') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>
    </form>	 
</table>
 
 