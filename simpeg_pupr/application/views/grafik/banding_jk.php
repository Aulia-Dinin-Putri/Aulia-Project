<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
 <!--js google chart-->
<script src="<?php echo base_url()?>/application/views/grafik/chartjs/Chart.js"></script>
</head>
<body>
<canvas id="myChart"></canvas>
<?php
//Inisialisasi nilai variabel awal
$kon= mysqli_connect("localhost","root","","simpeg_pupr");
$jk="";
$jumlah=null;
$sql="SELECT jk,COUNT(*) as 'total' FROM pegawai GROUP by jk";
$hasil=mysqli_query($kon,$sql);
while ($data = mysqli_fetch_array($hasil)){
	if ($data['jk']=='L'){
		$jkel="Laki-laki";
	}else{
		$jkel="Perempuan";
	}
	$jkel .= "'$jk'".",";
	
	$jum=$data['total'];
	$jumlah .= "$jum". ",";
}?>
<script>
var ctx=document.getElementById('myChart').getContext('2d');
var chart=new Chart(ctx, {
	//The type of chart we want to create
	type: 'pie',
	//The data for our dataset
	data: {
		labels: ['Laki-laki', 'Perempuan'],
		datasets: [{
			label: ['Laki-laki', 'Perempuan'],
			backgroundColor:
		['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)'],
			borderColor: ['rgb(255, 99, 132)'],
			data: [<?php echo $jumlah; ?>]
		}]
	},
	//Configuration options go here
	options: {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero : true
				}
			}]
		}
	}
});
</script>
</body>
</html>