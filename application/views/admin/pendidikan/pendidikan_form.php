<table class="table table-reposive">
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
	
	<tr><th>SD/MI</th><td><input type="text" name="SD" class="form-control" value="<?= $SD ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>SMP/MTS</th><td><input type="text" name="SMP" class="form-control" value="<?= $SMP ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>SMA/MA/SMK</th><td><input type="text" name="SMA" class="form-control" value="<?= $SMA ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>D3</th><td><input type="text" name="D3" class="form-control" value="<?= $D3 ?>"></td></tr>
	<tr><th>S1</th><td><input type="text" name="S1" class="form-control" value="<?= $S1 ?>"></td></tr>
	<tr><th>S2</th><td><input type="text" name="S2" class="form-control" value="<?= $S2 ?>"></td></tr>
	<tr><th>P. Akhir</th><td><select class="form-control" name="pend_akhir" required="">
	                          <option value="SD/MI">SD/MI</option>
	                          <option value="SMP/MTS">SMP/MTS</option>
							  <option value="SMA/MA">SMA/MA/SMK</option>
							  <option value="D3">D3</option>
							  <option value="S1">S1</option>
	                          <option value="S2">S2</option>
                              </select></td><th class="text-danger" >***</th></tr>
	<tr><td></td>
	<th>
		<input type="submit" name="kirim" value="Submit" class="btn btn-primary">
		<a href="<?= base_url('admin/pendidikan') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a>
	</th>
	</tr>
    </form>	 
</table>
 
 