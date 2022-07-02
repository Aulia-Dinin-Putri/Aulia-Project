<table class="table table-striped" style="border-collapse: collapse; width: 100%; margin: 0 auto;">
		<?php 
		if($aksi == 'edit'){
			echo '<form action="'. base_url() .'admin/pegawai_read_edit/'.$id_pegawai.'" method="POST" enctype="multipart/form-data">';
		}else{
			echo '<form action="'. base_url() .'admin/pegawai_read_tambah" method="POST" enctype="multipart/form-data">';

			}
		?>
 
<tr>
		<th>Nama Pegawai</th>
		<td>
			<div class="box-body">
				<div class="row">
					<div class="">
						<select class="form-control select2" name="id_admin" style="width: 100%;" required="">
							<option selected="selected" disabled>Cari Nama</option>
							<?php foreach ($data_pegawai as $value) {
								echo '<option value="'.$value->id_admin.'">'.$value->nama.'</option>';
							} ?>
						</select>
					</div>
				</div>
			</div>
		</td>
</tr>
<tr><th>Nip</th><td><input type="text" name="nip" value="<?= $nip ?>" class="form-control" required=""></td></tr>
<tr><th>NPWP</th><td><input type="text" name="npwp" value="<?= $npwp ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Nik</th><td><input type="text" name="nik" value="<?= $nik ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Gelar Sarjana</th><td><input type="text" name="gelar_kesarjanaan" value="<?= $gelar_kesarjanaan ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Tempat Lahir</th><td><input type="text" name="tempat" value="<?= $tempat ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Tanggal Lahir</th><td><input type="date" name="tgl_lahir" value="<?= $tgl_lahir ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>

<tr><th>Jenis Kelamin</th><td><select class="form-control" name="jk"  required="">
	                          <option value="Laki-Laki">Laki-Laki</option>
	                          <option value="Perempuan">Perempuan</option>
                              </select></td><th class="text-danger">***</th></tr>

<tr><th>Agama</th><td><select class="form-control" name="agama" required="">
	                   <option value="islam">Islam</option>
	                   <option value="kristen">Kristen</option>
	                   <option value="budha">Budha</option>
	                   <option value="hindu">Hindu</option>
	                   <option value="konghucu">Konghucu</option>    
	                   <option value="lainnya">Lainnya</option>    
	                   </select></td><th class="text-danger">***</th></tr>

<tr><th>Status Kepegawaian</th><td><select class="form-control" name="status_kep" required="">
	                          <option value="PNS">PNS</option>
	                          <option value="PPPK">PPPK</option>
                              </select></td><th class="text-danger">***</th></tr>

<tr><th>No HP </th><td><input type="text" name="no_hp" value="<?= $no_hp ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>
<tr><th>Email </th><td><input type="text" name="email" value="<?= $email ?>" class="form-control" required=""></td></tr>
<tr><th>Alamat </th><td><input type="text" name="alamat" value="<?= $alamat ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>

<tr><th>Foto</th><td>
	<?php 
      if($aksi == "Edit"){
        echo '<img src="'.base_url('template/data/'.$foto).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?>
<input type="file" name="gambar" value="" class="form-control" required="">
</td><th class="text-danger">***</th></tr>

<tr><th>Pendidikan</th><td><input type="text" name="pendidikan" value="<?= $pendidikan ?>" class="form-control" required=""></td><th class="text-danger">***</th></tr>

<tr><th>Gol Darah</th><td><select class="form-control" name="goldar" required="">
	                          <option value="A">A</option>
	                          <option value="B">B</option>
	                          <option value="AB">AB</option>
	                          <option value="O">O</option>
                              </select></td><th class="text-danger">***</th></tr>

<tr><th>Status Kawin</th><td><select class="form-control" name="status_kawin" required="">
	                          <option value="Belum Menikah">Belum Menikah</option>
	                          <option value="Menikah">Menikah</option>
	                          <option value="Janda">Janda</option>
	                          <option value="Duda">Duda</option>
                              </select></td><th class="text-danger">***</th></tr>

<tr><th>Tanggal Pensiun</th><td><input type="date" name="tgl_pensiun" value="<?= $tgl_pensiun ?>" class="form-control" required=""></td><th class="text-danger">*** Bagi PNS</th></tr>

<tr><th>No Karpeg</th><td><input type="text" name="no_karpeg" value="<?= $no_karpeg ?>" class="form-control"></td><th class="text-danger">*** Bagi PNS</th></tr>

<tr><th>No Taspen</th><td><input type="text" name="no_taspen" value="<?= $no_taspen ?>" class="form-control" required=""></td><th class="text-danger">*** Bagi PNS</th></tr>

<tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> <a href="<?= base_url('admin/pegawai') ?>" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></th></tr>
</form>
</table>