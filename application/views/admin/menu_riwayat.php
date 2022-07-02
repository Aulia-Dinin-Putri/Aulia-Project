<?php
 if($this->session->userdata('level') == "admin" ){

 ?>

<br><br>
		
<div class="col-lg-4 col-xs-12">
          <div class="small-box bg-green">
            <div class="inner" style="height: 100px">
              <h3></h3>

              <p>Riwayat Jabatan Pegawai</p>
            </div>
            <div class="icon">
             <i class="fa fa-book"></i>
            </div>
            <a href="http://localhost/simpeg_pupr/admin/jabatan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<div class="col-lg-4 col-xs-12">
          <div class="small-box bg-blue">
            <div class="inner" style="height: 100px">
              <h3></h3>

              <p>Riwayat Pendidikan Pegawai</p>
            </div>
            <div class="icon">
             <i class="fa fa-book"></i>
            </div>
            <a href="http://localhost/simpeg_pupr/admin/pendidikan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<div class="col-lg-4 col-xs-12">
          <div class="small-box bg-purple">
            <div class="inner" style="height: 100px">
              <h3></h3>

              <p>Riwayat Diklat Struktural Pegawai</p>
			</div>
            <div class="icon">
             <i class="fa fa-book"></i>
            </div>
            <a href="http://localhost/simpeg_pupr/admin/diklatstruktural" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php } ?>