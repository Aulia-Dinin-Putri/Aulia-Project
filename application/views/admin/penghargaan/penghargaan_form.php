<?php // json_encode($this->session->all_userdata()) ?>
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
	<tr><th>Nomor SK Penghargaan</th><td><input type="number" name="no_skpenghargaan" class="form-control" value="<?= $no_skpenghargaan ?>"></td></tr>
	<tr><th>Tanggal SK Penghargaan</th><td><input type="date" name="tgl_skpenghargaan" class="form-control" value="<?= $tgl_skpenghargaan ?>"></td></tr>
	<tr><th>Asal SK Penghargaan</th><td><input type="text" name="asal_skpenghargaan" class="form-control" value="<?= $asal_skpenghargaan ?>"></td></tr>
    <tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> 
	<a href="<?= base_url('admin/penghargaan') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a</th></tr>
    </form>	 
</table>
 
<script>

</script>