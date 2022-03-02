<?php
	include "koneksi.php";
	
	$tabel = $_POST['tabel'];
	$id = $_POST['id'];
	$merk = $_POST['merk'];
	$tipe = $_POST['tipe'];
    $foto = $_POST['foto'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
	
	$sql= "INSERT INTO $tabel VALUES ('$id', '$merk', '$tipe', '$foto', '$deskripsi', '$stok')";
	
	if (mysqli_query($connect, $sql)){
		echo "<script>alert('Data berhasil ditambahkan');
                document.location='dataKulkas.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal ditambahkan. .mysqli_connect_error();');
                document.location='dataKulkas.php'</script>";
	}
	mysqli_close($connect);
?>