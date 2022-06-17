<td>
	<a href="pegawai_read_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button>
	<a href="<?php echo base_url('excel/export_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br/><br/><br/>

<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
	  <th>No</th>
	  <th>Foto</th>
      <th>Nip</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Pendidikan</th>
      <th>Status Kepegawaian</th>
      <th>Alamat Lengkap</th>
      <th width="14%" class="text-center">Aksi</th>
    </tr>
    </thead>
     <tbody>
     <?php $no=1; foreach($data as $admin): ?>
     <tr>
     <td><?= $no ?></td>
	 <td><img src="<?= base_url('template/data/'.$admin['foto']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
     <td><?= $admin['nip'] ?></td> 
     <td><?= $admin['nama'] ?></td> 
     <td><?= $admin['jk'] ?></td>
     <td><?= $admin['agama'] ?></td>
     <td><?= $admin['pendidikan'] ?></td>
     <td><?= $admin['status_kep'] ?></td>
     <td><?= $admin['alamat'] ?></td>
     <td class="text-center"><a href="<?= base_url('admin/pegawai_read_detail/'.$admin['id_pegawai']) ?>" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i> Detail </a>
     <a href="<?= base_url('admin/pegawai_hapus/'.$admin['id_pegawai']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a></td> 
     </tr>
     <?php $no++; endforeach; ?>
     </tbody>
	 
	</table>
  

 
 