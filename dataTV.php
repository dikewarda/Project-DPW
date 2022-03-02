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
                        <li><a href="dataKulkas.php">Data Kulkas</a></li>
                        <li><a href="dataMC.php">Data Mesin Cuci</a></li>
                        <li><a href="dataTV.php" class="current">Data Televisi</a></li>
                            
                        </ul>
                    </div>
            </header>

            <div class="outer_div">
                <video id="Video1" class="bgvid outer" autoplay="false" muted="muted" preload="auto" loop>
                    <source src="loginbg/loginbg.mp4" type="video/mp4">
                </video>
                <div class="container">
    <h1 align="center">DATA TELEVISI</h1>
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
			
			$query = "SELECT * FROM tv";
			$result = mysqli_query($connect, $query);
			
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result)){
		    ?>
            <tr>
                <td> <?php echo $row["id_tv"] ?> </td>
                <td> <?php echo $row["merk_tv"] ?> </td>
                <td> <?php echo $row["tipe_tv"] ?> </td>
                <td><img src="img/<?php echo $row['gambar_tv'] ?>" width="280" alt="gambar_produk"></td>
                <td> <?php echo $row["deskripsi_tv"] ?> </td>
                <td> <?php echo $row["stok_tv"] ?> </td>
                <td> <button> 
                        <a href="editDataTV.php?id=<?php echo $row['id_tv']; ?>"> Edit </a>
                </button></td>
                <td> <button> 
                        <a href="hapusDataTV.php?id=<?php echo $row['id_tv']; ?>"> Hapus </a>
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
</body>
</body>
</html>