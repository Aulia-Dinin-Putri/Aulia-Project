<?php
 if($this->session->userdata('level') == "admin" ){
 ?>
<br><br>
<div class="col-lg-6 col-xs-12">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Pengangkatan Pegawai</h3>

              <p>Pengangkatan Pegawai (CPNS)</p>
            </div>
            <div class="icon">
              <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= base_url()?>admin/pengangkatancpns" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
<div class="col-lg-6 col-xs-12">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Pengangkatan Pegawai</h3>

              <p>Pengangkatan Pegawai (PNS)</p>
            </div>
            <div class="icon">
             <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= base_url()?>admin/pengangkatanpns" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php } ?>