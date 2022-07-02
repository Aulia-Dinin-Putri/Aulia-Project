<a href="jabatan_read"> <button onClick="window.print();" class="btn btn-warning"> <i class="fa fa-print"></i> Print Data</button></a>
    <table id="example1" class="table table-striped table-bordered text-left"> 
		<?php foreach($data as $admin){ ?>
		<form action="<?= base_url('admin/jabatan_edit/'.$admin['id_jabatan']) ?>" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
		<tr>
			<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Edit</button>
		</tr>
		<tr>
		<td width="100">NAMA</td>
		<td width="10">:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>NAMA JABATAN</td>
		<td>:</td>
		<td><?= $admin['nama_jabatan'] ?></td>
		</tr>
		<tr>
		<td>ESELON</td>
		<td>:</td>
		<td><?= $admin['eselon'] ?></td>
		</tr>
		<tr>
		<td>TMT JABATAN</td>
		<td>:</td>
		<td><?= $admin['tmt_jabatan'] ?></td>
		</tr>
		<?php }; ?>
    </table>
</form> 