<td>
	<a href="diklat_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
	<button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button>
	<a href="<?= base_url('excel8/export8_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br /><br /><br />


<?= $this->session->flashdata('pesan') ?>
    <div class="row">
	<div class="col-12 table-responsive">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
		<th>No</th>
		<th>Nama Pegawai</th>
        <th>Nama Diklat</th>
        <th>Jam Diklat</th>
        <th>Tanggal Diklat</th>
        <th>Tahun Diklat</th>
		<th>Angkatan Diklat</th>
		<th>No Diklat</th>
		<th>Penyelenggara Diklat</th>
		<th>Tempat Diklat</th>
        <th width="20%" class= "text-center">Aksi</th>
		</tr>
		</thead>
    <tbody>
    <?php $no=1; foreach($data as $admin): ?>
		<tr>
            <td><?= $no ?></td>
			<td><?= $admin['nama'] ?></td>
            <td><?= $admin['nama_diklat'] ?></td>
            <td><?= $admin['jam_diklat'] ?></td>
			<td><?= $admin['tgl_diklat'] ?></td>
			<td><?= $admin['tahun_diklat'] ?></td>
			<td><?= $admin['angkatan_diklat'] ?></td>
			<td><?= $admin['no_diklat'] ?></td>
            <td><?= $admin['penyelenggara_diklat'] ?></td>
            <td><?= $admin['tempat_diklat'] ?></td>
            <td>
                <a href="<?= base_url('admin/diklat_detail/'.$admin['id_diklatstruktural']) ?>" class="btn btn-success"><i class="fa fa-search-plus"></i> Detail Diklat</a>
                <a href="<?= base_url('admin/diklat_hapus/'.$admin['id_diklatstruktural']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
    <?php $no++; endforeach; ?>
     </tbody>
   </table>
   </div></div>

 
 