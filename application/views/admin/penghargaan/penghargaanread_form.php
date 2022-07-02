
<table class="table table-reposive">
	<form action="" method="POST">
	<tr><th>Nama Pegawai</th><td><input type="text" name="nama" class="form-control" value="<?= $nama ?>" disabled required=""></td><th class="text-danger">***</th></tr>
	<tr><th>Nomor SK Penghargaan</th><td><input type="text" name="no_skpenghargaan" class="form-control" value="<?= $no_skpenghargaan ?>"></td></tr>
	<tr><th>Tanggal SK Penghargaan</th><td><input type="date" name="tgl_skpenghargaan" class="form-control" value="<?= $tgl_skpenghargaan ?>"></td></tr>
	<tr><th>Asal SK Penghargaan</th><td><input type="text" name="asal_skpenghargaan" class="form-control" value="<?= $asal_skpenghargaan ?>"></td></tr>
    <tr><td></td>
	<th>
		<input type="submit" name="kirim" value="Submit" class="btn btn-primary">
		<a href="<?= base_url('admin/penghargaan_read') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a>
	</th>
	</tr>
    </form>	 
</table>
 
 