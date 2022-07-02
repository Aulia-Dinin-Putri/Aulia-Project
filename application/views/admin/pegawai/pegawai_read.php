<a href="pegawai_read"> <button onClick="window.print();" class="btn btn-warning"> <i class="fa fa-print"></i> Print Data</button></a>
    <table id="example1" class="table table-striped table-bordered text-left" >
    	<?php foreach($data as $admin){ ?>
    	<form action="<?= base_url('admin/pegawai_read_edit/'.$admin['id_pegawai']) ?>" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
		<tr>
		<td></td>
		<td></td>
		<td><img src="<?= base_url('template/data/'.$admin['foto']) ?>" class="img-responsive" style="width: 100px;height: 100px"></td>
		</tr>
		<tr>
		<td class="col-3">NIP</td>
		<td width="10">:</td>
		<td><?= $admin['nip'] ?></td>
		</tr>
		<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><?= $admin['nama'] ?></td>
		</tr>
		<tr>
		<td>NPWP</td>
		<td>:</td>
		<td><?= $admin['npwp'] ?></td>
		</tr>
		<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?= $admin['nik'] ?></td>
		</tr>
		<tr>
		<td>GELAR KESARJANAAN</td>
		<td>:</td>
		<td><?= $admin['gelar_kesarjanaan'] ?></td>
		</tr>
		<tr>
		<td>TEMPAT LAHIR</td>
		<td>:</td>
		<td><?= $admin['tempat'] ?></td>
		</tr>
		<tr>
		<td>TANGGAL LAHIR</td>
		<td>:</td>
		<td><?= $admin['tgl_lahir'] ?></td>
		</tr>
		<tr>
		<td>JENIS KELAMIN</td>
		<td>:</td>
		<td><?= $admin['jk'] ?></td>
		</tr>
		<tr>
		<td>AGAMA</td>
		<td>:</td>
		<td><?= $admin['agama'] ?></td>
		</tr>
		<td>PENDIDIKAN</td>
		<td>:</td>
		<td><?= $admin['pendidikan'] ?></td>
		</tr>
		<tr>
		<td>STATUS KEPEGAWAIAN</td>
		<td>:</td>
		<td><?= $admin['status_kep'] ?></td>
		</tr>
		<tr>
		<td>ALAMAT</td>
		<td>:</td>
		<td><?= $admin['alamat'] ?></td>
		</tr>
		<tr>
		<td>NO HP</td>
		<td>:</td>
		<td><a href="https://wa.me/<?= $admin['no_hp']; ?>" target="_blank"> <?= $admin['no_hp']; ?></a></td>
		</tr>
		<tr>
		<td>EMAIL</td>
		<td>:</td>
		<td><a href="mailto:$admin['email']; ?>"> <?= $admin['email'] ?></a></td>
		</tr>
		<tr>
		<td>GOLDAR</td>
		<td>:</td>
		<td><?= $admin['goldar'] ?></td>
		</tr>
		<tr>
		<td>STATUS PERKAWINAN</td>
		<td>:</td>
		<td><?= $admin['status_kawin'] ?></td>
		</tr>
		<tr>
		<td>PENSIUN</td>
		<td>:</td>
		<td><?= $admin['tgl_pensiun'] ?></td>
		</tr>
		<tr>
		<td>NO KARPEG</td>
		<td>:</td>
		<td><?= $admin['no_karpeg'] ?></td>
		</tr>
		<tr>
		<td>NO TASPEN</td>
		<td>:</td>
		<td><?= $admin['no_taspen'] ?></td>
		</tr>
		<tr>
			<button type="submit" class="btn btn-info"><i class="fa fa-edit"></i>Edit</button>
		</tr>
		<?php }; ?>
	</form> 
</table>
