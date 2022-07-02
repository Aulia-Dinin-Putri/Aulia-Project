<td>
	<a href="pendidikan_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
	<button onClick="window.print();" class="btn btn-warning" ><i class="fa fa-print"></i>Print Data</button>
	<a href="<?php echo base_url('excel7/export7_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>
<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
				  <th>Nama Pegawai</th>
				  <th>SD/MI</th>
                  <th>SMP/MTS</th>
				  <th>SMA/MA</th>
				  <th>D3</th>
				  <th>S1</th>
				  <th>S2</th>
                  <th>Pendidikan Akhir</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($data as $admin): ?>
                <tr>
					<td><?= $no ?></td>
					<td><?= $admin['nip'] ?></td>
					<td><?= $admin['nama'] ?></td>
					<td><?= $admin['SD'] ?></td>
					<td><?= $admin['SMP'] ?></td>
					<td><?= $admin['SMA'] ?></td>
					<td><?= $admin['D3'] ?></td>
					<td><?= $admin['S1'] ?></td>
					<td><?= $admin['S2'] ?></td> 
					<td><?= $admin['pend_akhir'] ?></td>
					<td>
						<a href="<?= base_url('admin/pendidikan_hapus/'.$admin['id_pendidikan']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
					</td> 
                </tr>
                <?php $no++; endforeach; ?>               
                </tbody>			 
</table>


 
 
 