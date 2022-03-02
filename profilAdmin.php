<?php 
    session_start();
?>

<?php
    include_once("koneksi.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Penyimpanan Barang Elektronik</title>
        <link rel="stylesheet" type="text/css" href="css-profil.css">
        <link rel="shortcut icon" href="logo/logoHome.png">
    </head>
    <body>
        <div>
            <header>
                    <div class="main">
                    <ul>
                        <li><a href="javascript:window.history.go(-1);">Kembali</a></li>
                    </ul>
                    </div>
            </header>
                <div class="title">
                    <center class="wrap">
                        <h1>PROFIL ADMIN</h1>
                        <br>
                        <table class="tabel">
                            <tbody>
                            <tr>
                                <td rowspan="10" width="100px"><img src="img/profilpict.jpg" alt="fotoProfil" width="250px"></td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>:</td>
                                <td><?php
                                    if($_SESSION['username'])
                                    {
                                        $result = mysqli_query($connect, "select * from `admin` where 
                                        username_admin = '{$_SESSION['username']}'");
                                        $show = mysqli_fetch_assoc($result);
                                        if($show)
                                        {
                                            echo "{$show['id_admin']}";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>
                                <?php
                                    if($_SESSION['username'])
                                    {
                                        $result = mysqli_query($connect, "select * from `admin` where 
                                        username_admin = '{$_SESSION['username']}'");
                                        $show = mysqli_fetch_assoc($result);
                                        if($show)
                                        {
                                            echo "{$show['username_admin']}";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                <?php
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
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>
                                <?php
                                    if($_SESSION['username'])
                                    {
                                        $result = mysqli_query($connect, "select * from `admin` where 
                                        username_admin = '{$_SESSION['username']}'");
                                        $show = mysqli_fetch_assoc($result);
                                        if($show)
                                        {
                                            echo "{$show['ttl_admin']}";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td><?php
                                    if($_SESSION['username'])
                                    {
                                        $result = mysqli_query($connect, "select * from `admin` where 
                                        username_admin = '{$_SESSION['username']}'");
                                        $show = mysqli_fetch_assoc($result);
                                        if($show)
                                        {
                                            echo "{$show['jabatan_admin']}";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td>
                                <?php
                                    if($_SESSION['username'])
                                    {
                                        $result = mysqli_query($connect, "select * from `admin` where 
                                        username_admin = '{$_SESSION['username']}'");
                                        $show = mysqli_fetch_assoc($result);
                                        if($show)
                                        {
                                            echo "{$show['level']}";
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                            
                        </table>
                    </center>
                </div>
            
        </div>
        
    </body>
</html>