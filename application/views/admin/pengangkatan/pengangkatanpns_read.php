
<form action="" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:left;">
    <table id="example1" class="table table-striped table-bordered text-left">
		<?php foreach($data as $admin){ ?>
		<tr>
			<a href="pengangkatanpns_read" style="margin-right: 10px;"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a> <a href="<?= base_url('admin/pengangkatanpns_edit/'.$admin['id_angkat_pns']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td>
			<p><?= $admin['bukti'] ?></p>
			<a href="<?= base_url('template/data/'.$admin['bukti']) ?>" class="btn btn-primary" download>Download <i class="fa fa-download"></i> </a>
			<a href="javascript:void(0)" target="_blank" class="btn btn-warning" onclick="window.open(`<?= base_url('template/data/'.$admin['bukti']) ?>`)">Preview <i class="fa fa-link"></i> </a>
		</td>
		</tr>
		<tr>
		<td width="300">Nama Pegawai</td>
		<td width="10">:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>Nomor SK</td>
		<td>:</td>
		<td><?= $admin['no_sk'] ?></td>
		</tr>
		<tr>
		<td>Pejabat yang menetapkan</td>
		<td>:</td>
		<td><?= $admin['pejabat_ygmenetapkan'] ?></td>
		</tr>
		<tr>
		<td>Gapok</td>
		<td>:</td>
		<td><?= $admin['gapok_sk'] ?></td>
		</tr>
		<tr>
		<td>Pangkat</td>
		<td>:</td>
		<td><?= $admin['pangkat_sk'] ?></td>
		</tr>
		<tr>
		<td>Gol. Ruang</td>
		<td>:</td>
		<td><?= $admin['gol_ruang'] ?></td>
		</tr>
		<td>T.M.T PNS</td>
		<td>:</td>
		<td><?= $admin['tmt_pns'] ?></td>
		</tr>
		<td>Suket Kesehatan</td>
		<td>:</td>
		<td><?= $admin['suket_kesehatan'] ?></td>
		</tr>
		<td>STTPL</td>
		<td>:</td>
		<td><?= $admin['sttpl'] ?></td>
		</tr>
		
		<?php }; ?>
    </table>
</form>
<script>
	function detail(el) {
		window.open($(el).data('link'));
	}
</script>