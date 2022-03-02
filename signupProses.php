<?php
	include "koneksi.php";
	
	if (isset($_POST['username']) || isset($_POST['password']) || isset($_POST['nama']) || isset($_POST['ttl_admin'])
		|| isset($_POST['jabatan_admin']) || isset($_POST['level'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$ttl_admin = $_POST['ttl_admin'];
		$jabatan_admin = $_POST['jabatan_admin'];
		$level = $_POST['level'];
    }else{
        echo "<script>alert('Maaf anda tidak bisa mengakses halaman ii');
            document.location='signup.html'</script>";
    }

	if(empty($username) || empty($password)  || empty($nama)  || empty($ttl_admin) || empty($jabatan_admin) || empty($level) ){
        echo "<script>alert('Data tidak boleh ada yang kosong');
            document.location='signup.html'</script>";?>
            <?php
    }

	$sql= "INSERT INTO admin (username_admin, password_admin, nama_admin, ttl_admin, jabatan_admin, level)
			VALUES ('$username', md5('$password'), '$nama', '$ttl_admin', '$jabatan_admin', '$level')";
	
	
	if (mysqli_query($connect, $sql)){
		echo "<script>alert('Registrasi telah berhasil. Silahkan untuk Login!');
                    document.location='login.html'</script>";
	}
	else{
		echo "<script>alert('Registrasi gagal. Silahkan coba lagi!'. . mysqli_connect_error(););
                    document.location='signup.html'</script>";
	}
	mysqli_close($connect);
?>
			