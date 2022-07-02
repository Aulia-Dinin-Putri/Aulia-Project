<a href="diklatstruktural_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button></a>
</br></br>
<div class="panel panel-default">
  <div class="panel-heading">Data Riwayat Diklat Struktural</div>
    <div class="panel-body">
      <?php foreach($data as $admin){ ?>
        <table id="example1" class="table table-striped table-bordered text-left">
          <tr>
            <td width="200">Nama Pegawai</td>
            <td width="10">:</td> 
            <td><?= $admin['nama'] ?></td>
          </tr>
          <tr>
            <td width="200">NIP</td>
            <td width="10">:</td> 
            <td><?= $admin['nip'] ?></td>
          </tr>
          <tr>
            <td width="200">Nama Diklat</td>
            <td width="10">:</td> 
            <td><?= $admin['nama_diklat'] ?></td>
          </tr>
          <tr>
          <td>Jam Diklat</td>
          <td>:</td>
          <td><?= $admin['jam_diklat'] ?></td>
          </tr>
          <tr>
          <td>Tanggal Diklat</td>
          <td>:</td>
          <td><?= $admin['tgl_diklat'] ?></td>
          </tr>
          <tr>
          <td>Tahun Diklat</td>
          <td>:</td>
          <td><?= $admin['tahun_diklat'] ?></td>
          </tr>
          <tr>
          <td>Angkatan Diklat</td>
          <td>:</td>
          <td><?= $admin['angkatan_diklat'] ?></td>
          </tr>
          <tr>
          <td>No Diklat</td>
          <td>:</td>
          <td><?= $admin['no_diklat'] ?></td>
          </tr>
          <tr>
          <td>Penyelenggara Diklat</td>
          <td>:</td>
          <td><?= $admin['penyelenggara_diklat'] ?></td>
          </tr>
          <tr>
          <td>Tempat Diklat</td>
          <td>:</td>
          <td><?= $admin['tempat_diklat'] ?></td>
          </tr>
        </table>

        <a href="<?= base_url('admin/diklat_edit/'.$admin['id_diklatstruktural']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a> 
        <a href="<?= base_url('admin/diklat_hapus/'.$admin['id_diklatstruktural']) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
        <hr>
      <?php }; ?>
    </div>
</div>
<button class="btn btn-success tambah" type="button"> <i class="glyphicon glyphicon-plus"></i> Tambah Diklat Struktural </button>
<button class="btn btn-warning batal" type="button" style="display: none"> <i class="glyphicon glyphicon-remove"></i> Batal Tambah Diklat Struktural </button>
  
  <div class="panel panel-default form-tambah" style="display: none; margin-top: 10px">
    <div class="panel-heading">Form Tambah Data Diklat Struktural</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="<?= base_url() ?>admin/diklat_tambah" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Pegawai</label>
            <input type="text" name="" class="form-control" value="Nama pegawai tidak usah diisi" disabled>
            <label>NIP</label>
            <input type="text" name="" class="form-control" value="Nip pegawai tidak usah diisi" disabled>
            <label>Nama Diklat</label>
            <input type="text" name="nama_diklat" class="form-control" required>
            <label>Jam Diklat</label>
            <input type="time" name="jam_diklat" class="form-control" required>
            <label>Tanggal Diklat</label>
            <input type="date" name="tgl_diklat" class="form-control" required>
            <label>Tahun Diklat</label>
            <input type="number" name="tahun_diklat" class="form-control" required>
            <label>Angkatan Diklat</label>
            <input type="text" name="angkatan_diklat" class="form-control" required>
            <label>No Diklat</label>
            <input type="number" name="no_diklat" class="form-control" required>
            <label>Penyelenggara Diklat</label>
            <select name="penyelenggara_diklat" class="form-control" required>
                <option value="" selected disabled>Pilih Penyelenggara Diklat</option>
                <option value="Bandiklat">Bandiklat</option>
                <option value="Diklat Prov.">Diklat Prov.</option>
            </select>
            <!--<input type="text" name="penyelenggara_diklat" class="form-control" required>-->
            <label>Tempat Diklat</label>
            <input type="text" name="tempat_diklat" class="form-control" required>
            <br>
            <button class="btn btn-primary" type="submit" name="kirim" value="Submit">Simpan</button>
          </div>
        </form>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
        <div class="copy hide">
            <div class="control-group">
              <label>Nama Pegawai</label>
              <input type="text" name="nama[]" class="form-control">
              <label>NIP</label>
            <input type="text" name="nip[]" class="form-control">
            <label>Nama Diklat</label>
            <input type="text" name="diklatI[]" class="form-control">
            <label>Jam Diklat</label>
            <input type="time" name="jam_diklatI[]" class="form-control">
            <label>Tanggal Diklat</label>
            <input type="date" name="tgl_diklatI[]" class="form-control">
            <label>Tahun Diklat</label>
            <input type="year" name="tahun_diklatI[]" class="form-control">
            <label>Angkatan Diklat</label>
            <input type="text" name="angkatan_diklatI[]" class="form-control">
            <label>No Diklat</label>
            <input type="text" name="no_diklatI[]" class="form-control">
            <label>Penyelenggara Diklat</label>
            <input type="text" name="penyelenggara_diklatI[]" class="form-control">
            <label>Tempat Diklat</label>
            <input type="text" name="tempat_diklatI[]" class="form-control">
              <br>
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              <hr>
            </div>
          </div>
        </div>
    </div>
  </div>
<script>
  $(".tambah").click(function(){ 
    $(".form-tambah").show();
    $(".tambah").hide();
    $(".batal").show();
  });
  $(".batal").click(function(){ 
    $(".form-tambah").hide();
    $(".tambah").show();
    $(".batal").hide();
  });
</script>