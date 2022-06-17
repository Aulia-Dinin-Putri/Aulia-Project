<a href="diklatstruktural_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a>
<form action="" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
    <table id="example1" class="table table-striped table-bordered text-left">		 
		<?php foreach($data as $admin){ ?>
		<tr>
		<td width="200">NIP</td>
		<td width="10">:</td>
		<td><?= $admin['nip'] ?></td>
		</tr>
		<tr>
		<td>Nama Pegawai</td>
		<td>:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>Diklat I</td>
		<td>:</td>
		<td><?= $admin['diklatI'] ?></td>
		</tr>
		<tr>
		<td>Jam DiklatI</td>
		<td>:</td>
		<td><?= $admin['jam_diklatI'] ?></td>
		</tr>
		<tr>
		<td>Tanggal DiklatI</td>
		<td>:</td>
		<td><?= $admin['tgl_diklatI'] ?></td>
		</tr>
		<tr>
		<td>Tahun DiklatI</td>
		<td>:</td>
		<td><?= $admin['tahun_diklatI'] ?></td>
		</tr>
		<tr>
		<td>Angkatan DiklatI</td>
		<td>:</td>
		<td><?= $admin['angkatan_diklatI'] ?></td>
		</tr>
		<tr>
		<td>No DiklatI</td>
		<td>:</td>
		<td><?= $admin['no_diklatI'] ?></td>
		</tr>
		<tr>
		<td>Penyelenggara DiklatI</td>
		<td>:</td>
		<td><?= $admin['penyelenggara_diklatI'] ?></td>
		</tr>
		<tr>
		<td>Tempat DiklatI</td>
		<td>:</td>
		<td><?= $admin['tempat_diklatI'] ?></td>
		</tr>
		<tr>
		<td>Diklat II</td>
		<td>:</td>
		<td><?= $admin['diklatII'] ?></td>
		</tr>
		<tr>
		<td>Jam DiklatII</td>
		<td>:</td>
		<td><?= $admin['jam_diklatII'] ?></td>
		</tr>
		<tr>
		<td>Tanggal DiklatII</td>
		<td>:</td>
		<td><?= $admin['tgl_diklatII'] ?></td>
		</tr>
		<tr>
		<td>Tahun DiklatII</td>
		<td>:</td>
		<td><?= $admin['tahun_diklatII'] ?></td>
		</tr>
		<tr>
		<td>Angkatan DiklatII</td>
		<td>:</td>
		<td><?= $admin['angkatan_diklatII'] ?></td>
		</tr>
		<tr>
		<td>No DiklatII</td>
		<td>:</td>
		<td><?= $admin['no_diklatII'] ?></td>
		</tr>
		<tr>
		<td>Penyelenggara DiklatII</td>
		<td>:</td>
		<td><?= $admin['penyelenggara_diklatII'] ?></td>
		</tr>
		<tr>
		<td>Tempat DiklatII</td>
		<td>:</td>
		<td><?= $admin['tempat_diklatII'] ?></td>
		</tr> 
		<tr>
		<td>Diklat III</td>
		<td>:</td>
		<td><?= $admin['diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Jam DiklatIII</td>
		<td>:</td>
		<td><?= $admin['jam_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Tanggal DiklatIII</td>
		<td>:</td>
		<td><?= $admin['tgl_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Tahun DiklatIII</td>
		<td>:</td>
		<td><?= $admin['tahun_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Angkatan DiklatIII</td>
		<td>:</td>
		<td><?= $admin['angkatan_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>No DiklatIII</td>
		<td>:</td>
		<td><?= $admin['no_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Penyelenggara DiklatIII</td>
		<td>:</td>
		<td><?= $admin['penyelenggara_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Tempat DiklatIII</td>
		<td>:</td>
		<td><?= $admin['tempat_diklatIII'] ?></td>
		</tr>
		<tr>
		<td>Diklat IV</td>
		<td>:</td>
		<td><?= $admin['diklatIV'] ?></td>
		</tr>
		<tr>
		<td>Jam DiklatIV</td>
		<td>:</td>
		<td><?= $admin['jam_diklatIV'] ?></td>
		</tr>
		<tr>
		<td>Tanggal DiklatIV</td>
		<td>:</td>
		<td><?= $admin['tgl_diklatIV'] ?></td>
		</tr>
		<tr>
		<td>Tahun DiklatIV</td>
		<td>:</td>
		<td><?= $admin['tahun_diklatIV'] ?></td>
		</tr>
		<tr>
		<td>Angkatan DiklatIV</td>
		<td>:</td>
		<td><?= $admin['angkatan_diklatIV'] ?></td>
		</tr>
		<tr>
		<td>No DiklatIV</td>
		<td>:</td>
		<td><?= $admin['no_diklatIV'] ?></td>
		</tr>
		<tr>
		<td>Penyelenggara DiklatIV</td>
		<td>:</td>
		<td><?= $admin['penyelenggara_diklatIV'] ?></td>
		</tr>
		<tr>
		<td>Tempat DiklatIV</td>
		<td>:</td>
		<td><?= $admin['tempat_diklatIV'] ?></td>
		</tr>
		<tr>
			<a href="<?= base_url('admin/diklat_edit/'.$admin['id_diklatstruktural']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
		</tr>
		<?php }; ?>
    </table>
</form>