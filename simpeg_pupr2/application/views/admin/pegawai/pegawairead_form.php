<table class="table table-striped">
<a href="#"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i>Print Data</button></a>
<form action="" method="POST" enctype="multipart/form-data"> 
<table id="example1" class="table table-striped table-bordered"> 
	
	<tr>
	<td></td>
	<td width="70" text align="center"></td>
	<td><?php 
      if($aksi == "detail"){
        echo '<img src="'.base_url('template/data/'.$foto).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?></td>
	<td></td>
	</tr>
	
	<tr>
	<td width="500">NIP</td>
	<td width="70" text align="center">:</td>
	<td><?= $nip ?></td>
	</tr>
	
	<tr>
	<td>Nama</td>
	<td width="70" text align="center">:</td>
	<td><?= $nama ?></td>
	</tr>
	
	<tr>
	<td>NPWP</td>
	<td width="70" text align="center">:</td>
	<td><?= $npwp ?></td>
	</tr>
	
	<tr>
	<td>NIK</td>
	<td width="70" text align="center">:</td>
	<td><?= $nik ?></td>
	</tr>
	
	<tr>
	<td>Gelar Sarjana</td>
	<td width="70" text align="center">:</td>
	<td><?= $gelar_kesarjanaan ?></td>
	</tr>
	
	<tr>
	<td>Tempat Lahir</td>
	<td width="70" text align="center">:</td>
	<td><?= $tempat ?></td>
	</tr>
	
	<tr>
	<td>Tanggal Lahir</td>
	<td width="70" text align="center">:</td>
	<td><?= $tgl_lahir ?></td>
	</tr>
	
	<tr>
	<td>Jenis Kelamin</td>
	<td width="70" text align="center">:</td>
	<td><?= $jk ?></td>
	</tr>
	
	<tr>
	<td>Agama</td>
	<td width="70" text align="center">:</td>
	<td><?= $agama ?></td>
	</tr>
	
	<tr>
	<td>Pendidikan</td>
	<td width="70" text align="center">:</td>
	<td><?= $pendidikan ?></td>
	</tr>
	
	<tr>
	<td>Status Kepegawaian</td>
	<td width="70" text align="center">:</td>
	<td><?= $status_kep ?></td>
	</tr>
	
	<tr>
	<td>Alamat</td>
	<td width="70" text align="center">:</td>
	<td><?= $alamat ?></td>
	</tr>
	
	<tr>
	<td>No Telepon</td>
	<td width="70" text align="center">:</td>
	<td><a href="https://wa.me/<?= $no_hp; ?>" target="_blank"> <?= $no_hp ?></a></td>
	</tr>
	
	<tr>
	<td>Email</td>
	<td width="70" text align="center">:</td>
	<td><a href="mailto:$email; ?>"> <?= $email ?></a></td>
	</tr>
	
	<tr>
	<td>Gol Darah</td>
	<td width="70" text align="center">:</td>
	<td><?= $goldar ?></td>
	</tr>
	
	<tr>
	<td>Status Perkawinan</td>
	<td width="70" text align="center">:</td>
	<td><?= $status_kawin ?></td>
	</tr>
	
	<tr>
	<td>Pensiun</td>
	<td width="70" text align="center">:</td>
	<td><?= $tgl_pensiun ?></td>
	</tr>
	
	<tr>
	<td>Nomor Karpeg</td>
	<td width="70" text align="center">:</td>
	<td><?= $no_karpeg ?></td>
	</tr>
	
	<tr>
	<td>Nomor Taspen</td>
	<td width="70" text align="center">:</td>
	<td><?= $no_taspen ?></td>
	</tr>
	
	<!--<tr>
	<td>Username</td>
	<td width="70" text align="center">:</td>
	<td><?= $username ?></td>
	</tr>
	
	<tr>
	<td>Password</td>
	<td width="70" text align="center">:</td>
	<td><?= $password ?></td>
	</tr>-->
<tr><td></td><th><a href="<?= base_url('admin/pegawai') ?>" class="btn btn-primary" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>
</form>
</table>