<td>
	<a href="penghargaan_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
	<button onClick="window.print();" class="btn btn-warning" ><i class="fa fa-print"></i>Print Data</button>
	<a href="<?php echo base_url('excel6/export6_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
				  <th>Nama Pegawai</th>
				  <th>Nomor SK Penghargaan</th>
                  <th>Tanggal SK Penghargaan</th>
                  <th>Asal SK Penghargaan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($data as $admin): ?>
					<tr>
						<td><?= $no ?></td>
						<td><?= $admin['nama'] ?></td>
						<td><?= $admin['no_skpenghargaan'] ?></td> 
						<td><?= $admin['tgl_skpenghargaan'] ?></td>
						<td><?= $admin['asal_skpenghargaan'] ?></td>
						<td>
							<a href="<?= base_url('admin/penghargaan_hapus/'.$admin['id_penghargaan']) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</a>
						</td> 
					</tr>
					<?php $no++; endforeach; ?>
                </tbody>
</table>


 
 
 