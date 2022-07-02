<a href="pendidikan_read"> <button onClick="window.print();" class="btn btn-warning"> <i class="fa fa-print"></i> Print Data</button></a>
    <table id="example1" class="table table-striped table-bordered text-left">
		<?php foreach($data as $admin){ ?>
		<form action="<?= base_url('admin/pendidikan_edit/'.$admin['id_pendidikan']) ?>" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
		<tr>
			<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Edit</button>
		</tr>
		<tr>
		<td width="100">NIP</td>
		<td width="10">:</td>
		<td><?= $admin['nip'] ?></td>
		</tr>
		<tr>
		<td>NAMA PEGAWAI</td>
		<td>:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>SD/MI</td>
		<td>:</td>
		<td><?= $admin['SD'] ?></td>
		</tr>
		<tr>
		<td>SMP/MTS</td>
		<td>:</td>
		<td><?= $admin['SMP'] ?></td>
		</tr>
		<tr>
		<td>SMA/MA</td>
		<td>:</td>
		<td><?= $admin['SMA'] ?></td>
		</tr>
		<tr>
		<td>D3</td>
		<td>:</td>
		<td><?= $admin['D3'] ?></td>
		</tr>
		<tr>
		<td>S1</td>
		<td>:</td>
		<td><?= $admin['S1'] ?></td>
		</tr>
		<tr>
		<td>S2</td>
		<td>:</td>
		<td><?= $admin['S2'] ?></td>
		</tr>
		<tr>
		<td>Pendidikan Akhir</td>
		<td>:</td>
		<td><?= $admin['pend_akhir'] ?></td>
		</tr>
		<?php }; ?>
    </table>
</form> 