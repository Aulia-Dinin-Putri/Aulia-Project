<table class="table table-reposive">
	<form action="" method="POST">
	<tr><th>Tanggal</th><td><input type="date" name="tgl_sk" class="form-control" value="<?= $tgl_sk ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Nama Pegawai</th><td><input type="text" name="nama" class="form-control" value="<?= $nama ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Bukti Pengangkatan</th><td>
	<?php 
      if($aksi == "Edit"){
        echo '<img src="'.base_url('template/data/'.$bukti).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?>
<input type="file" name="gambar" value="<?= $bukti ?>" class="form-control" required="">
</td><th class="text-danger">***</th></tr>
	<tr><th>Nomor Surat Keputusan</th><td><input type="text" name="no_sk" class="form-control" value="<?= $no_sk ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Pejabat yang menetapkan</th><td><select class="form-control" name="pejabat_ygmenetapkan" required="">
	                          <option value="Bupati Jombang">Bupati Jombang</option>
	                          <option value="-">-</option>
							  </select></td><th class="text-danger">***</th></tr>
	<tr><th>Gapok Surat Keputusan</th><td><input type="text" name="gapok_sk" class="form-control" value="<?= $gapok_sk ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Pangkat</th><td><select class="form-control" name="pangkat_sk" required="">
	                          <option value="Juru Muda">Juru Muda</option>
	                          <option value="Juru Muda Tingkat I">Juru Muda Tingkat I</option>
	                          <option value="Juru">Juru</option>
	                          <option value="Juru Tingkat I">Juru Tingkat I</option>
	                          <option value="Pengatur Muda">Pengatur Muda</option>
	                          <option value="Pengatur Muda Tingkat I">Pengatur Muda Tingkat I</option>
	                          <option value="Pengatur">Pengatur</option>
	                          <option value="Pengatur Tingkat I">Pengatur Tingkat I</option>
	                          <option value="Penata Muda">Penata Muda</option>
	                          <option value="Penata Muda Tingkat I">Penata Muda Tingkat I</option>
							  <option value="Penata ">Penata</option>
							  <option value="Penata Tingkat I">Penata Tingkat I</option>
							  <option value="Pembina">Pembina</option>
							  <option value="Pembina Tingkat I">Pembina Tingkat I</option>
							  <option value="Pembina Utama Muda">Pembina Utama Muda</option>
							  <option value="Pembina Utama Madya">Pembina Utama Madya</option>
							  </select></td><th class="text-danger">***</th></tr>
							  
	<tr><th>Golongan Ruang</th><td><select class="form-control" name="gol_ruang" required="">
	                          <option value="I/a">I/a</option>
							  <option value="II/a">II/a</option>
							  <option value="III/a">III/a</option>
							  <option value="IV/a">IV/a</option>
	                          <option value="I/b">I/b</option>
							  <option value="II/b">II/b</option>
							  <option value="III/b">III/b</option>
							  <option value="IV/b">IV/b</option>
							  <option value="I/c">I/c</option>
							  <option value="II/c">II/c</option>
							  <option value="III/c">III/c</option>
							  <option value="IV/c">IV/c</option>
							  <option value="I/d">I/d</option>
							  <option value="II/d">II/d</option>
							  <option value="III/d">III/d</option>
							  <option value="IV/d">IV/d</option>
							  </select></td><th class="text-danger">***</th></tr>
							  
	<tr><th>T.M.T PNS</th><td><input type="date" name="tmt_pns" class="form-control" value="<?= $tmt_pns ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Tahun</th><td><input type="text" name="tahun" class="form-control" value="<?= $tahun ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Bulan</th><td><select class="form-control" name="bulan" required="">
	                          <option value="Jan">Januari</option>
	                          <option value="Febr">Februari</option>
							  <option value="Mar">Maret</option>
							  <option value="Ap">April</option>
							  <option value="Mei">Mei</option>
	                          <option value="Jun">Juni</option>
							  <option value="Jul">Juli</option>
							  <option value="Ags">Agustus</option>
							  <option value="Sept">September</option>
	                          <option value="Okt">Oktober</option>
							  <option value="Nov">November</option>
							  <option value="Des">Desember</option>
							  </select></td><th class="text-danger">***</th></tr>
							  
	<tr><th>Suket Kesehatan</th><td><input type="text" name="suket_kesehatan" class="form-control" value="<?= $suket_kesehatan ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>STTPL</th><td><input type="text" name="sttpl" class="form-control" value="<?= $sttpl ?>" required=""></td><th class="text-danger" >***</th></tr>
	<tr><th>Sumpah/Janji/PNS</th><td><input type="teks" name="sumpah_janji_pns" class="form-control" value="<?= $sumpah_janji_pns ?>" required=""></td><th class="text-danger" >***</th></tr>
    <tr><td></td><td><input type="submit" name="kirim" value="Submit" class="btn btn-primary"> &nbsp;&nbsp; <a href="http://localhost/simpeg_pupr/admin/pengangkatanpns_read" class="btn btn-success" class="small-box-footer">Back <i class="fa fa-arrow-circle-right"></i></a></td></tr>
	</form>	 
</table>
 
 