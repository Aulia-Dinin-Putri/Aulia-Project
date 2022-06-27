<a href="pengangkatancpns_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a>
	<table id="example1" class="table table-striped table-bordered text-left">		 
		<?php foreach($data as $admin){ ?>
		<form action="<?= base_url('admin/pengangkatancpns_edit/'.$admin['id_angkat_cpns']) ?>" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
		<tr>
			<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Edit</button>
		</tr>
		<tr>
		<td></td>
		<td></td>
		</tr>
		<tr>
		<td width="200">Nama Pegawai</td>
		<td width="10">:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>No SK CPNS</td>
		<td>:</td>
		<td><?= $admin['no_sk_cpns'] ?></td>
		</tr>
		<tr>
		<td>Tgl SK CPNS</td>
		<td>:</td>
		<td><?= $admin['tgl_sk_cpns'] ?></td>
		</tr>
		<tr>
		<td>Gaji</td>
		<td>:</td>
		<td><?= $admin['gaji'] ?></td>
		</tr>
		<tr>
		<td>Gol Ruang</td>
		<td>:</td>
		<td><?= $admin['gol_ruang'] ?></td>
		</tr>
		<tr>
		<td>T.M.T CPNS</td>
		<td>:</td>
		<td><?= $admin['tmt_cpns'] ?></td>
		</tr>
		<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><?= $admin['jabatan'] ?></td>
		</tr>
		<tr>
		<td>OPD</td>
		<td>:</td>
		<td><?= $admin['opd'] ?></td>
		</tr>
		<tr>
		<td>T.M.T SPMT</td>
		<td>:</td>
		<td><?= $admin['tmt_spmt'] ?></td>
		</tr>
		<tr>
		<td>Bukti</td>
		<td>:</td>
		<td>
			<p><?= $admin['foto'] ?></p>
			<a href="<?= base_url('template/data/'.$admin['foto']) ?>" class="btn btn-primary" download>Download <i class="fa fa-download"></i> </a>
			<a href="javascript:void(0)" target="_blank" class="btn btn-warning" onclick="window.open(`<?= base_url('template/data/'.$admin['foto']) ?>`)">Preview <i class="fa fa-link"></i> </a>
		</td>
		</tr>
		<?php }; ?>
    </table>
</form>