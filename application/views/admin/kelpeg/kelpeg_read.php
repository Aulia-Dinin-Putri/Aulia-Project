<a href="kelpeg_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a>
	<table id="example1" class="table table-striped table-bordered text-left">		 
		<?php foreach($data as $admin){ ?>
		<form action="<?= base_url('admin/kelpegread_edit/'.$admin['id_kelpeg']) ?>" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
		<tr>
		<td width="300">Nama Pegawai</td>
		<td width="10">:</td>
		<td><?= $admin['nama_admin'] ?></td>
		</tr>
		<tr>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?= $admin['nama_ayah'] ?></td>
		</tr>
		<tr>
		<td>Tempat Lahir Ayah</td>
		<td>:</td>
		<td><?= $admin['tempat_ayah'] ?></td>
		</tr>
		<tr>
		<td>Tanggal Lahir Ayah</td>
		<td>:</td>
		<td><?= $admin['tgllahir_ayah'] ?></td>
		</tr>
		<tr>
		<td>Pekerjaan Ayah</td>
		<td>:</td>
		<td><?= $admin['pekerjaan_ayah'] ?></td>
		</tr>
		<tr>
	  	<td>Nama Ibu</td>
		<td>:</td>
		<td><?= $admin['nama_ibu'] ?></td>
		</tr>
		<tr>
	  	<td>Tempat Lahir Ibu</td>
		<td>:</td>
		<td><?= $admin['tempat_ibu'] ?></td>
		</tr>
		<tr>
	  	<td>Tanggal Lahir Ibu</td>
		<td>:</td>
		<td><?= $admin['tgllahir_ibu'] ?></td>
		</tr>
		<tr>
	  	<td>Pekerjaan Ibu</td>
		<td>:</td>
		<td><?= $admin['pekerjaan_ibu'] ?></td>
		</tr>
		<tr>
	  	<td>Nama Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['nama_is'] ?></td>
		</tr>
		<tr>
	  	<td>Tempat Lahir Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['tempat_is'] ?></td>
		</tr>
		<tr>
	  	<td>Tanggal Lahir Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['tgllahir_is'] ?></td>
		</tr>
		<tr>
	  	<td>Tanggal Kawin</td>
		<td>:</td>
		<td><?= $admin['tgl_kawin'] ?></td>
		</tr>
		<tr>
	  	<td>Pendidikan Akhir Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['pend_akhir'] ?></td>
		</tr>
		<tr>
	  	<td>Pekerjaan Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['pekerjaan_is'] ?></td>
		</tr>
		<tr>
	  	<td>Nip Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['nip_is'] ?></td>
		</tr>
		<tr>
	  	<td>Pangkat Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['pangkat'] ?></td>
		</tr>
		<tr>
	  	<td>No KK</td>
		<td>:</td>
		<td><?= $admin['no_kk'] ?></td>
		</tr>
		<tr>
	  	<td>NIK Istri/Suami</td>
		<td>:</td>
		<td><?= $admin['nik_is'] ?></td>
		</tr>
		<tr>
	  	<td>OPD</td>
		<td>:</td>
		<td><?= $admin['opd'] ?></td>
		</tr>
		<tr>
	  	<td>Nama Anak</td>
		<td>:</td>
		<td><?= $admin['nama_anak1'] ?></td>
		</tr>
		<tr>
	  	<td>Tempat Lahir Anak</td>
		<td>:</td>
		<td><?= $admin['tempat_anak1'] ?></td>
		</tr>
		<tr>
	  	<td>Tanggal Lahir Anak</td>
		<td>:</td>
		<td><?= $admin['tgllahir_anak1'] ?></td>
		</tr>
		<tr>
	  	<td>Pekerjaan Anak</td>
		<td>:</td>
		<td><?= $admin['pekerjaan_anak1'] ?></td>
		</tr>
		<tr>
	  	<td>Status Anak</td>
		<td>:</td>
		<td><?= $admin['status_anak1'] ?></td>
		</tr>
		<tr>
	  	<td>Pendidikan Anak</td>
		<td>:</td>
		<td><?= $admin['pend_anak1'] ?></td>
		</tr>
		<tr>
	  	<td>Jenis Kelamin Anak</td>
		<td>:</td>
		<td><?= $admin['jk_anak1'] ?></td>
		</tr>
		<tr>
	  	<!--<td>Nama Anak-2</td>
		<td>:</td>
		<td><?= $admin['nama_anak2'] ?></td>
		</tr>
		<tr>
	  	<td>Tempat Lahir Anak-2</td>
		<td>:</td>
		<td><?= $admin['tempat_anak2'] ?></td>
		</tr>
		<tr>
	  	<td>Tanggal Lahir Anak-2</td>
		<td>:</td>
		<td><?= $admin['tgllahir_anak2'] ?></td>
		</tr>
		<tr>
	  	<td>Pekerjaan Anak-2</td>
		<td>:</td>
		<td><?= $admin['pekerjaan_anak2'] ?></td>
		</tr>
		<tr>
	  	<td>Status Anak-2</td>
		<td>:</td>
		<td><?= $admin['status_anak2'] ?></td>
		</tr>
		<tr>
	  	<td>Pendidikan Anak-2</td>
		<td>:</td>
		<td><?= $admin['pend_anak2'] ?></td>
		</tr>
		<tr>
	  	<td>Jenis Kelamin Anak-2</td>
		<td>:</td>
		<td><?= $admin['jk_anak2'] ?></td>
		</tr>
		<tr>
		<td>Nama Anak-3</td>
		<td>:</td>
		<td><?= $admin['nama_anak3'] ?></td>
		</tr>
		<tr>
		<td>Tempat Lahir Anak-3</td>
		<td>:</td>
		<td><?= $admin['tempat_anak3'] ?></td>
		</tr>
		<tr>
		<td>Tanggal Lahir Anak-3</td>
		<td>:</td>
		<td><?= $admin['tgllahir_anak3'] ?></td>
		</tr>
		<tr>
		<td>Pekerjaan Anak-3</td>
		<td>:</td>
		<td><?= $admin['pekerjaan_anak3'] ?></td>
		</tr>
		<tr>
		<td>Status Anak-3</td>
		<td>:</td>
		<td><?= $admin['status_anak3'] ?></td>
		</tr>
		<tr>
		<td>Pendidikan Anak-3</td>
		<td>:</td>
		<td><?= $admin['pend_anak3'] ?></td>
		</tr>
		<tr>
		<td>Jenis Kelamin Anak-3</td>
		<td>:</td>
		<td><?= $admin['jk_anak3'] ?></td>
		</tr> -->
		<tr>
			<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Edit</button>
		</tr>
		<?php }; ?>
    </table>
</form>