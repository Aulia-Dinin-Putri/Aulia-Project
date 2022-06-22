<td>
	<a href="pengangkatanpns_tambah" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
	<button onClick="window.print();" class="btn btn-warning" ><i class="fa fa-print"></i>Print Data</button>
	<a href="<?php echo base_url('excel42/export42_excel') ?>" class="btn btn-success" ><i class="fa fa-file-excel-o"></i> Excel</a>
</td>

<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>No</th>
					<th>Nama Pegawai</th>
					<th width="15%">Bukti Pengangkatan</th>
					<th>Nomor SK</th>
					<th>Pejabat yang menetapkan</th>
					<th>Gapok</th>
					<th>Pangkat</th>
        			<th>Gol. Ruang</th>
        			<th>T.M.T PNS</th>
        			<th>Suket Kesehatan</th>
        			<th>STTPL</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($data as $admin): ?>
                <tr>
					<td><?= $no ?></td>
					<td><?= $admin['nama'] ?></td>
					<td>
						<?php if($admin['bukti'] != ""){ ?>
							<a href="<?= base_url('template/data/'.$admin['bukti']) ?>" class="btn btn-primary" download>Download <i class="fa fa-download"></i> </a> <a href="javascript:void(0)" target="_blank" class="btn btn-warning" onclick="window.open(`<?= base_url('template/data/'.$admin['bukti']) ?>`)">Preview <i class="fa fa-link"></i> </a>

						<?php } ?>	
					</td>
					<td><?= $admin['no_sk'] ?></td> 
					<td><?= $admin['pejabat_ygmenetapkan'] ?></td>
        			<td>Rp.<?= number_format($admin['gapok_sk']) ?></td>
        			<td><?= $admin['pangkat_sk'] ?></td>
        			<td><?= $admin['gol_ruang'] ?></td>
        			<td><?= $admin['tmt_pns'] ?></td>
        			<td><?= $admin['suket_kesehatan'] ?></td>
        			<td><?= $admin['sttpl'] ?></td>
                <td>
					<a href="<?= base_url('admin/pengangkatanpns_hapus/'.$admin['id_angkat_pns']) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</a>
				</td> 
                </tr>

                <?php $no++; endforeach; ?>           
                </tbody>
</table>


 
 
 