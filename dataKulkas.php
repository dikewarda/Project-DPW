<!DOCTYPE html>
<html>
<head>
	<title>Data Penyimpanan Barang Elektronik</title>
	<link rel="stylesheet" type="text/css" href="css-table1.css">
    <link rel="shortcut icon" href="logo/logoData.png">
    
</head>
<body>
    <div>
        <header>
                <div class="main">
                    <ul>
                        <li><a href="home1.php">Kembali</a></li>
                        <li><a href="insertData.html">Tambah Data</a></li>
                        <li><a href="dataKulkas.php" class="current">Data Kulkas</a></li>
                        <li><a href="dataMC.php">Data Mesin Cuci</a></li>
                        <li><a href="dataTV.php">Data Televisi</a></li>
                            
                    </ul>
                </div>
        </header>

        <div class="outer_div">
            <video id="Video1" class="bgvid outer" autoplay="false" muted="muted" preload="auto" loop>
                <source src="loginbg/loginbg.mp4" type="video/mp4">
            </video>
            <div class="container">
                <h1 align="center">DATA KULKAS</h1>
                <br>
                    <table class="fixed-th">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Merk </th>
                                <th> Tipe </th>
                                <th> Gambar </th>
                                <th> Deskripsi </th>
                                <th> Stok </th>
                                <th> Update Data</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            include "koneksi.php";
                            
                            $query = "SELECT * FROM kulkas";
                            $result = mysqli_query($connect, $query);
                            
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td> <?php echo $row["id_kulkas"] ?> </td>
                                <td> <?php echo $row["merk_kulkas"] ?> </td>
                                <td> <?php echo $row["tipe_kulkas"] ?> </td>
                                <td><img src="img/<?php echo $row['gambar_kulkas'] ?>" width="280" alt="gambar_produk"></td>
                                <td> <?php echo $row["deskripsi_kulkas"] ?> </td>
                                <td> <?php echo $row["stok_kulkas"] ?> </td>
                                <td> <button> 
                                    <a href="editDataKulkas.php?id=<?php echo $row['id_kulkas']; ?>"> Edit </a>
                                </button></td>
                                <td> <button> 
                                    <a href="hapusDataKulkas.php?id=<?php echo $row['id_kulkas']; ?>"> Hapus </a>
                                </button></td>
                                
                            <?php
                                    }
                                }
                                else{
                                    echo "0 result";
                                }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                <br/>
            </div>
        </div>

        
    </div>
</body>
</html>