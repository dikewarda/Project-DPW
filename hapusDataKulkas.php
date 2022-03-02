<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$sql= "DELETE FROM kulkas WHERE id_kulkas = '$id'";
	
	if (mysqli_query($connect, $sql)){
		echo "<script>alert('Data berhasil dihapus');
                document.location='dataKulkas.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal dihapus. .mysqli_connect_error();');
                document.location='dataKulkas.php'</script>";
	}	
	mysqli_close($connect);
?>
			
			