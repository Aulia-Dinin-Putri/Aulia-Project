<td>
	<a href="gaji_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	<button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button>
	<a href="<?php echo base_url('excel3/export3_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br/><br/><br/>
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama Pegawai</th>
				  <th>Pejabat yang menetapkan</th>
				  <th>Nomor</th>
				  <th>Tanggal Surat</th>
				  <th>Gaji Pokok</th>
				  <th>T.M.T KGB</th>
				  <th>Tahun</th>
				  <th>Bulan</th>
				  <th width= "25%">Aksi</th>
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data as $admin): ?>
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['nip'] ?></td> 
                 <td><?= $admin['nama'] ?></td>
				 <td><?= $admin['pejabat_ygmenetapkan'] ?></td>
				 <td><?= $admin['nomor'] ?></td>
                 <td><?= $admin['tgl_surat'] ?></td>
				 <td>Rp <?= number_format($admin['gaji_pokok']) ?></td>
				 <td><?= $admin['tmt_kgb'] ?></td>
				 <td><?= $admin['tahun'] ?></td>
                 <td><?= $admin['bulan'] ?></td>
				 <td class="text-center">
					<a href="<?= base_url('admin/gaji_edit/'.$admin['id_penggajian']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
					<a href="<?= base_url('admin/gaji_hapus/'.$admin['id_penggajian']) ?>" onclick="return(confirm('Anda Yakin ?'))" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a> 
                 </td>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>

 
 