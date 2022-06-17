<?php    
	
	//memasukkan data ke array
        $nama				= $_POST['nama'];
        $no_skpenghargaan	= $_POST['no_skpenghargaan'];
        $tgl_skpenghargaan	= $_POST['tgl_skpenghargaan'];
        $asal_skpenghargaan	= $_POST['asal_skpenghargaan'];

        $total = count($nama);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($con, "insert into mahasiswa set
            nama				=	'$nama[$i]',
            no_skpenghargaan	=	'$no_skpenghargaan[$i]',
            tgl_skpenghargaan	=	'$tgl_skpenghargaan[$i]',
            asal_skpenghargaan	=	'$asal_skpenghargaan[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: penghargaan_read.php");


 
 
 