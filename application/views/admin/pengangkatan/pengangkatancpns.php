<td>
	<a href="pengangkatancpns_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
	<button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button>
	<a href="<?php echo base_url('excel4/export4_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pegawai</th>
				  <th>Bukti Pengangkatan</th>
                  <th>No SK CPNS</th>
				  <th>Tgl SK CPNS</th>
				  <th>Gaji</th>
				  <th>Gol Ruang</th>
				  <th>T.M.T CPNS</th>
				  <th>Jabatan</th>
				  <th>OPD</th>
				  <th>T.M.T SPMT</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php $no=1; foreach($data as $admin): ?>
                <tr>
                <td><?= $no ?></td>
				<td><?= $admin['nama'] ?></td>
				<td><a href="<?= base_url() ?>template/data/<?= $admin['foto'] ?>" target="_blank" rel="noopener noreferrer"> <img src="<?= base_url() ?>template/data/<?= $admin['foto'] ?>" alt="" width="100"></a> </td>
				<td><?= $admin['no_sk_cpns'] ?></td>
				<td><?= $admin['tgl_sk_cpns'] ?></td>
				<td>Rp.<?= number_format($admin['gaji']) ?></td>
				<td><?= $admin['gol_ruang'] ?></td>
				<td><?= $admin['tmt_cpns'] ?></td>
				<td><?= $admin['jabatan'] ?></td>
				<td><?= $admin['opd'] ?></td>
				<td><?= $admin['tmt_spmt'] ?></td>
                <td>
					<a href="<?= base_url('admin/pengangkatancpns_hapus/'.$admin['id_angkat_cpns']) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</a>
				</td> 
                </tr>
                <?php $no++; endforeach; ?>              
                </tbody>
</table>


 
 
 