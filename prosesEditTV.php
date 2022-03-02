<?php
	include "koneksi.php";
	
	$id = $_POST['id'];
	$merk = $_POST['merk'];
	$tipe = $_POST['tipe'];
	$gambar = $_POST['foto'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

	
	$query= "UPDATE tv SET id_tv='$id', merk_tv='$merk', tipe_tv='$tipe' , gambar_tv='$gambar'
            , deskripsi_tv='$deskripsi', stok_tv='$stok'
			WHERE id_tv='$id'";
	$result = mysqli_query($connect, $query);
	
	if ($result){
		echo "<script>alert('Data berhasil diupdate');
                document.location='dataTV.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal diupdate. .mysqli_connect_error();');
                document.location='dataTV.php'</script>";
	}
?>
			