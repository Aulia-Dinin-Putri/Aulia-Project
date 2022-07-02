<a href="penghargaan_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button></a>
</br></br>
<div class="panel panel-default">
  <div class="panel-heading">Data Penghargaan</div>
    <div class="panel-body">
      <?php foreach($data as $admin){ ?>
        <table id="example1" class="table table-striped table-bordered text-left">
          <tr>
            <td width="200">Nama Pegawai</td>
            <td width="10">:</td> 
            <td>
              <?php echo $admin['nama']; ?>
            </td>
          </tr>
          <tr>
            <td>Nomor SK Penghargaan</td>
            <td>:</td>
            <td><?= $admin['no_skpenghargaan'] ?></td>
          </tr>
          <tr>
            <td>Tanggal SK Penghargaan</td>
            <td>:</td>
            <td><?= $admin['tgl_skpenghargaan'] ?></td>
          </tr>
          <tr>
            <td>Asal SK Penghargaan</td>
            <td>:</td>
            <td><?= $admin['asal_skpenghargaan'] ?></td>
          </tr>
          <tr>
            <!-- <a href="<?= base_url('admin/penghargaan_edit/'.$admin['id_penghargaan']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a> </td> -->
          </tr>
        </table>

        <!-- <a href="penghargaan_read"> <button onClick="window.print();" class="btn btn-warning"><i class="fa fa-print"></i> Print Data</button></a> -->
        <a href="<?= base_url('admin/penghargaan_edit/'.$admin['id_penghargaan']) ?>" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a> 
        <a href="<?= base_url('admin/penghargaan_hapus/'.$admin['id_penghargaan']) ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
        <hr>
      <?php }; ?>
    </div>
</div>
<button class="btn btn-success tambah" type="button"> <i class="glyphicon glyphicon-plus"></i> Tambah Penghargaan </button>
<button class="btn btn-warning batal" type="button" style="display: none"> <i class="glyphicon glyphicon-remove"></i> Batal Tambah Penghargaan</button>
  <!-- <?= json_encode($this->session->all_userdata()) ?> -->
  <div class="panel panel-default form-tambah" style="display: none; margin-top: 10px">
    <div class="panel-heading">Form Tambah Data Penghargaan</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="<?= base_url() ?>admin/penghargaan_tambah_user" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Pegawai</label>
            <input type="text" name="" class="form-control" value="Nama Pegawai tidak usah diisi" disabled>
            <label>Nomor SK Penghargaan</label>
            <input type="text" name="no_skpenghargaan" class="form-control" required>
            <label>Tanggal SK Penghargaan</label>
            <input type="date" name="tgl_skpenghargaan" class="form-control" required>
            <label>Asal SK Penghargaan</label>
            <input type="text" name="asal_skpenghargaan" class="form-control" required>
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
              <label>Nomor SK Penghargaan</label>
              <input type="text" name="no_skpenghargaan[]" class="form-control">
              <label>Tanggal SK Penghargaan</label>
              <input type="text" name="tgl_skpenghargaan[]" class="form-control">
              <label>Asal SK Penghargaan</label>
              <input type="text" name="asal_skpenghargaan[]" class="form-control">
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