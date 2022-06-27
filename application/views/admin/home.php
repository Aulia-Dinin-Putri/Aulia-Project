<?php if($this->session->userdata('level') == "admin" ){ ?>

<html>
<head>
	<script type="text/javascript" src="application/views/admin/chartjs/Chart.js"></script>
</head>

<body>
	<div class="col-lg-6 col-xs-12">
	<h3><center><i class="fa fa-pie-chart"></i>Grafik Pegawai Berdasarkan Jenis Kelamin</center></h3>
	<?php $this->load->view('grafik/banding_jk') ?>
	</div>

	<div class="col-lg-6 col-xs-12">
	<h3><center><i class="fa fa-line-chart"></i>Grafik Pegawai Berdasarkan Pendidikan</center></h3>
	<?php $this->load->view('grafik/banding_pendidikan') ?>
	</div>

</body>
</html>
	

	<div class="col-lg-4 col-xs-12">
		<div class="small-box bg-green">
			<div class="inner" style="height: 100px">
				<h4>Identitas Pegawai</h4>
			</div>
				<div class="icon"><i class="fa fa-user"></i></div>
					<a href="http://localhost/simpeg_pupr/admin/pegawai" class="small-box-footer">More info
						<i class="fa fa-arrow-circle-right"></i>
					</a>
		</div>
    </div>


    <div class="col-lg-4 col-xs-12">
        <div class="small-box bg-aqua">
        <div class="inner"style="height: 100px">
			<p>Data Penggajian Pegawai</p>
        </div>
            <div class="icon"><i class="fa fa-address-card"></i></div>
				<a href="http://localhost/simpeg_pupr/admin/gaji" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12">
        <div class="small-box bg-blue">
        <div class="inner" style="height: 100px">
            <p>Identitas Keluarga Pegawai</p>
        </div>
            <div class="icon"><i class="fa fa-users"></i></div>
				<a href="http://localhost/simpeg_pupr/admin/kelpeg" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12">
        <div class="small-box bg-yellow">
        <div class="inner" style="height: 100px">
            <p>Pengangkatan Pegawai</p>
        </div>
            <div class="icon"><i class="fa fa-cubes"></i></div>
				<a href="http://localhost/simpeg_pupr/admin/menu_pengangkatan" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
        </div>
    </div>

	<div class="col-lg-4 col-xs-12">
        <div class="small-box bg-red">
        <div class="inner" style="height: 100px">
            <p>Penghargaan Pegawai</p>
        </div>
            <div class="icon"><i class="fa fa-star"></i></div>
				<a href="http://localhost/simpeg_pupr/admin/penghargaan" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
        </div>
    </div>	
    <div class="col-lg-4 col-xs-12">
        <div class="small-box bg-aqua">
        <div class="inner" style="height: 100px">
            <p>Data Riwayat Pegawai</p>
        </div>
            <div class="icon"><i class="fa fa-database" ></i></div>
				<a href="http://localhost/simpeg_pupr/admin/menu_riwayat" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
        </div>
    </div>
			  
<?php }elseif($this->session->userdata('level') == "user"){ ?>
<br /><br />
<html>
	<head>
		<div class="callout callout-success">
			<h4><i class="fa fa-cubes"></i> Selamat Datang </h4>
			<p>Anda Login Sebagai <?php echo $this->session->userdata('nama') ?></p>
		</div>
	</head>
	
	<body>
		<div class="col-lg-12 col-xs-12">
			<h3><center><i class="fa fa-book"></i> Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</center></h3>
		</div>
	</body>
</html>
<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
<?php } ?>