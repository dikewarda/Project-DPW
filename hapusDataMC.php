<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	
	$sql= "DELETE FROM mc WHERE id_mc = '$id'";
	
	if (mysqli_query($connect, $sql)){
		echo "<script>alert('Data berhasil dihapus');
                document.location='dataMC.php'</script>";
	}
	else{
		echo "<script>alert('Data gagal dihapus. .mysqli_connect_error();');
                document.location='dataMC.php'</script>";
	}
	mysqli_close($connect);
?>
			
			