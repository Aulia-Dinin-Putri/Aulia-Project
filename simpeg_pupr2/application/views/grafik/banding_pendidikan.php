<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
 <!--js google chart-->
<script src="<?php echo base_url()?>/application/views/grafik/chart2js/Chart.js"></script>
</head>
<body>
<canvas id="myChart2"></canvas>
<?php
//Inisialisasi nilai variabel awal
$kon= mysqli_connect("localhost","root","","simpeg_pupr2");
$pendidikan="";
$jumlah=null;
$sql= "SELECT pendidikan, count(*) as 'total' FROM `pegawai` GROUP by pendidikan";
$hasil=mysqli_query($kon,$sql);
while ($data = mysqli_fetch_array($hasil)){
		if ($data['pendidikan']=='SD'){
		$pendidikan="SD";
	}else{
		$pendidikan="SLP";
	}if($data['pendidikan']=='SLP'){
		$pendidikan="SLP";
	}else{
		$pendidikan="SLA";
	}if($data['pendidikan']=='SLA'){
		$pendidikan="SLA";
	}else{
		$pendidikan="D3";
	}if($data['pendidikan']=='D3'){
		$pendidikan="D3";
	}else{
		$pendidikan="S1";
	}if($data['pendidikan']=='S1'){
		$pendidikan="S1";
	}else{
		$pendidikan="S2";
	}
	$pendidikan .= "'$pendidikan'".",";
	
	$jum=$data['total'];
	$jumlah .= "$jum". ",";
}?>
<script>
var ctx=document.getElementById('myChart2').getContext('2d');
var chart=new Chart(ctx, {
	//The type of chart we want to create
	type: 'pie',
	//The data for our dataset
	data: {
		labels: ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2'],
		datasets: [{
			label:['SD', 'SMP', 'SA', 'D3', 'S1', 'S2'],
			backgroundColor:
		['rgba(255, 99, 132, 0.7)','rgba(25, 199, 132, 0.7)','rgba(54, 162, 235, 0.7)','rgba(255, 100, 76, 0.7)','rgba(255, 206, 86, 0.7)','rgba(192, 192, 192, 0.7)'],
			borderColor: ['rgba(255,99,132,1)','rgba(25, 199, 132, 1)','rgba(54, 162, 235, 1)','rgba(255, 100, 76, 1)','rgba(255, 206, 86, 1)','rgba(192, 192, 192, 1)'],
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