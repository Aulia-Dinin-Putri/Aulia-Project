<a href="gaji_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a>
<form action="" method="POST" enctype="multipart/form-data" style="border-collapse:collapse; width:100%; margin:0 auto; text-align:center;">
    <table id="example1" class="table table-striped table-bordered text-left">
		 
		 <?php foreach($data as $admin){ ?>
		 <tr>
		 <td width="300">Nip</td>
		 <td width="10">:</td>
		 <td><?= $admin['nip'] ?></td>
		 </tr>
		 <tr>
		 <td>Nama Pegawai</td>
		 <td>:</td>
		 <td><?= $admin['nama'] ?></td>
		 </tr>
		 <tr>
		 <td>Pejabat yang menetapkan</td>
		 <td>:</td>
		 <td><?= $admin['pejabat_ygmenetapkan'] ?></td>
		 </tr>
		 <tr>
		 <td>Nomor</td>
		 <td>:</td>
		 <td><?= $admin['nomor'] ?></td>
		 </tr>
		 <tr>
		 <td>Tanggal Surat</td>
		 <td>:</td>
		 <td><?= $admin['tgl_surat'] ?></td>
		 </tr>
		 <tr>
		 <td>Gaji Pokok</td>
		 <td>:</td>
		 <td><?= $admin['gaji_pokok'] ?></td>
		 </tr>
		 <tr>
		 <td>T.M.T KGB</td>
		 <td>:</td>
		 <td><?= $admin['tmt_kgb'] ?></td>
		 </tr>
		 <tr>
		 <td>Tahun</td>
		 <td>:</td>
		 <td><?= $admin['tahun'] ?></td>
		 </tr>
		 <tr>
		 <td>Bulan</td>
		 <td>:</td>
		 <td><?= $admin['bulan'] ?></td>
		 </tr>
    <?php }; ?>
    </table>
</form>