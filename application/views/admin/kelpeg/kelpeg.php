<td>
	<a href="kelpeg2_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	<button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button>
	<a href="<?php echo base_url('excel2/export2_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br /><br /><br />

<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped ">
    <thead>
    <tr>
	  <th>No</th>
      <th>Nama Pegawai</th>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>Nama Istri/Suami</th>
      <th>Aksi</th>
    </tr>
    </thead>
     <tbody>
     <?php $no=1; foreach($data as $admin): ?>
     <tr>
     <td><?= $no ?></td>
     <td><?= $admin['nama'] ?></td>
     <td><?= $admin['nama_ayah'] ?></td>
     <td><?= $admin['nama_ibu'] ?></td>
     <td><?= $admin['nama_is'] ?></td>
     <td class="text-center">
		<a href="<?= base_url('admin/kelpeg2_detail/'.$admin['id_kelpeg']) ?>" class="btn btn-success"><i class="fa fa-search-plus"></i> Detail</a>
		<a href="<?= base_url('admin/kelpeg_hapus/'.$admin['id_kelpeg']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	 </td>
	 </tr>
     <?php $no++; endforeach; ?>
     </tbody>
   </table>

 
 