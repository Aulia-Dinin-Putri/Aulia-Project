<table class="table table-striped">
<a href="#"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a>
<form action="" method="POST" enctype="multipart/form-data"> 
<?php foreach($data as $admin){ ?>
	<table id="example1" class="table table-striped table-bordered text-left">
		<tr>
		<td width="200">Nama Pegawai</td>
		<td width="10">:</td> 
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td width="200">NIP</td>
		<td width="10">:</td> 
		<td><?= $admin['nip'] ?></td>
		</tr>
		<tr>
		<td width="200">Nama Diklat</td>
		<td width="10">:</td> 
		<td><?= $admin['nama_diklat'] ?></td>
		</tr>
		<tr>
		<td>Jam Diklat</td>
		<td>:</td>
		<td><?= $admin['jam_diklat'] ?></td>
		</tr>
		<tr>
		<td>Tanggal Diklat</td>
		<td>:</td>
		<td><?= $admin['tgl_diklat'] ?></td>
		</tr>
		<tr>
		<td>Tahun Diklat</td>
		<td>:</td>
		<td><?= $admin['tahun_diklat'] ?></td>
		</tr>
		<tr>
		<td>Angkatan Diklat</td>
		<td>:</td>
		<td><?= $admin['angkatan_diklat'] ?></td>
		</tr>
		<tr>
		<td>No Diklat</td>
		<td>:</td>
		<td><?= $admin['no_diklat'] ?></td>
		</tr>
		<tr>
		<td>Penyelenggara Diklat</td>
		<td>:</td>
		<td><?= $admin['penyelenggara_diklat'] ?></td>
		</tr>
		<tr>
		<td>Tempat Diklat</td>
		<td>:</td>
		<td><?= $admin['tempat_diklat'] ?></td>
		</tr>
	</table>
<?php }; ?>
<?php 
if($aksi == "edit"):
?>	
<span><i></i></span>
<?php endif; ?>