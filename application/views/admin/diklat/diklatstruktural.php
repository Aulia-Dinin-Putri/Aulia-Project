<td>
	<a href="diklat_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	<button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button>
	<a href="<?php echo base_url('excel8/export8_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br /><br /><br />


<?= $this->session->flashdata('pesan') ?>
	<table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
		<th>No</th>
        <th>Nip</th>
		<th>Nama Pegawai</th>
        <th>DiklatI</th>
        <th>DiklatII</th>
        <th>DiklatIII</th>
        <th>DiklatIV</th>
        <th width="20%" class= "text-center">Aksi</th>
		</tr>
		</thead>
    <tbody>
    <?php $no=1; foreach($data as $admin): ?>
		<tr>
            <td><?= $no ?></td>
			<td><?= $admin['nip'] ?></td>
			<td><?= $admin['nama'] ?></td>
            <td><?= $admin['diklatI'] ?></td>
            <td><?= $admin['diklatII'] ?></td>
            <td><?= $admin['diklatIII'] ?></td>
            <td><?= $admin['diklatIV'] ?></td>
            <td>
                <a href="<?= base_url('admin/diklat_detail/'.$admin['id_diklatstruktural']) ?>" class="btn btn-success"><i class="fa fa-search-plus"></i> Detail Diklat</a>
                <a href="<?= base_url('admin/diklat_hapus/'.$admin['id_diklatstruktural']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
    <?php $no++; endforeach; ?>
     </tbody>
   </table>

 
 