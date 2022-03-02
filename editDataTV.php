<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data Televisi</title>
        <link rel="stylesheet" type="text/css" href="css-editData.css">
    </head>
    <body>
      <header style="height: 60px;">
          <div class="main">
            <ul>
              <li><a href="dataTV.php" class="active">Kembali</a></li>
            </ul>
          </div>
        </header>
        <div class="outer_div">
            <video id="Video1" class="bgvid outer" autoplay="false" muted="muted" preload="auto" loop>
                <source src="loginbg/loginbg.mp4" type="video/mp4">
            </video>
            <div class="inner_div">
              <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
                <source src="loginbg/loginbg.mp4" type="video/mp4">
              </video>
              <div class="login_div">
              <?php
                  include "koneksi.php";
                  $id = $_GET['id'];
                  $query = "SELECT * FROM tv WHERE id_tv='$id'";
                  $result = mysqli_query($connect, $query);
              ?>
                <h1>Edit Data Televisi</h1>
                <form action="prosesEditTV.php" method="POST">
                <?php
                  while($row=mysqli_fetch_array($result)){
                ?>
                  <input type="text" name="id" value="<?php echo $row['id_tv'];?>" readonly>
                  <input type="text" name="merk" value="<?php echo $row['merk_tv'];?>">
                  <input type="text" name="tipe" value="<?php echo $row['tipe_tv'];?>">
                  <input type="file" name="foto" value="<?php echo $row['gambar_tv'];?>">
                  <input type="text" name="deskripsi" value="<?php echo $row['deskripsi_tv'];?>">
                  <input type="number" name="stok" value="<?php echo $row['stok_tv'];?>">
                  <button>Simpan Data</button>
                <?php
                }
              ?>
                </form>
              </div>
            </div>
        </div>
    </body>
</html>