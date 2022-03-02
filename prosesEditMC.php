<?php
	include "koneksi.php";
	
	$id = $_POST['id'];
	$merk = $_POST['merk'];
	$tipe = $_POST['tipe'];
	$gambar = $_POST['foto'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

	
	$query= "UPDATE mc SET id_mc='$id', merk_mc='$merk', tipe_mc='$tipe' , gambar_mc='$gambar'
            , deskripsi_mc='$deskripsi', stok_mc='$stok'
			WHERE id_mc='$id'";
	$result = mysqli_query($connect, $query);
	
	if ($result){
		echo "<script>alert('Data berhasil diupdate');
                document.location='dataMC.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal diupdate. .mysqli_connect_error();');
                document.location='dataMC.php'</script>";
	}
?>
			