<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$sql= "DELETE FROM tv WHERE id_tv = '$id'";
	
	if (mysqli_query($connect, $sql)){
		echo "<script>alert('Data berhasil dihapus');
                document.location='dataTV.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal dihapus. .mysqli_connect_error();');
                document.location='dataTV.php'</script>";
	}	
	mysqli_close($connect);
?>
			
			