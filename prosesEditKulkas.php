<?php
	include "koneksi.php";
	
	$id = $_POST['id'];
	$merk = $_POST['merk'];
	$tipe = $_POST['tipe'];
	$gambar = $_POST['foto'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

	
	$query= "UPDATE kulkas SET id_kulkas='$id', merk_kulkas='$merk', tipe_kulkas='$tipe' , gambar_kulkas='$gambar'
            , deskripsi_kulkas='$deskripsi', stok_kulkas='$stok'
			WHERE id_kulkas='$id'";
	$result = mysqli_query($connect, $query);
	
	if ($result){
		echo "<script>alert('Data berhasil diupdate');
                document.location='dataKulkas.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal diupdate. .mysqli_connect_error();');
                document.location='dataKulkas.php'</script>";
	}
?>
			