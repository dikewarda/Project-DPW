<?php

include "koneksi.php";

if (isset($_POST['username']) AND isset($_POST['password'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
}else{
    echo "<script>alert('Maaf anda harus mengakses halaman ini dari login');
        document.location='login.html'</script>";
}

$query= "SELECT * FROM admin WHERE username_admin ='$username' and password_admin='$password'";
$result=mysqli_query($connect, $query);
$cek=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if(empty($username)){
    echo "<script>alert('Username atau Password tidak boleh kosong');
        document.location='login.html'</script>";?>
        <?php
}else{
    if(is_string($username)){
        if($cek > 0){
            
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            
            if ($row['level'] == 1){
                echo "<script>alert('Login berhasil anda akan diarahkan ke halaman home admin');
                document.location='home1.php'</script>";
                
            }else if($row['level']==2){
                echo "<script>alert('Login berhasil anda akan diarahkan ke halaman home admin');
                document.location='home2.php'</script>"; ?>
                <?php
            }
        }else{
            echo "<script type='text/javascript'>
                alert('Login gagal! Username atau Password anda salah. Silahkan untuk coba lagi!');
                history.back(self);
            </script>"; ?>
        <?php
            echo mysqli_error($connect);
        }
    }else{
        echo "<script>alert('Username atau Password tidak memenuhi kriteria');
            document.location='login.html'</script>";?>
        <?php
    }
    
}

