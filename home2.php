<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Penyimpanan Barang Elektronik</title>
        <link rel="stylesheet" type="text/css" href="css-home.css">
        <link rel="shortcut icon" href="logo/logoHome.png">
    </head>
    <body>
        <div>
            <header>
                    <div class="main">
                    <ul>
                        <li><a href="profilAdmin.php" class="active">Profil Admin</a></li>
                        <li><a href="logout.php" class="active">Logout</a></li>
                    </ul>
                    </div>
            </header>
                <div class="title">
                    <center><h1 style="width: 800px;">SELAMAT DATANG</h1></center>
                    <center><h1 style="width: 800px;"> <?php
                        include_once("koneksi.php");
                        if($_SESSION['username'])
                        {
                            $result = mysqli_query($connect, "select * from `admin` where 
                            username_admin = '{$_SESSION['username']}'"); 
                            $show = mysqli_fetch_assoc($result); 
                            if($show)
                            {
                                echo "{$show['nama_admin']}";
                            }
                        }
                        ?>
                    </h1></center>
                    
                </div>
    
                <div class="button">
                    <a href="lihatDataKulkas.php" class="btn">CEK DATA</a>
                </div>
            
        </div>
        
    </body>
</html>