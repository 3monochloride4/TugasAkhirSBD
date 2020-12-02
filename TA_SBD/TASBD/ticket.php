<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$ambildata = mysqli_query($koneksi, "SELECT * FROM progress_ticket ORDER BY id_ticket ASC");
$ambildata2 = mysqli_query($koneksi, "SELECT * FROM tugas_teknisi ORDER BY id_karyawan ASC");
$ambildata3 = mysqli_query($koneksi, "SELECT * FROM ticket ORDER BY id_ticket ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>

    <h2>Daftar Ticket yang ditangani</h2> 

    <table width='80%' border=1>

    <tr>
        <th>ID Ticket</th> <th>Tanggal Input</th> <th>Nama Pelanggan</th> <th>Deskripsi</th> <th>Nama Teknisi</th> <th>Status Ticket</th>
    </tr>
    <?php  
    while($data_tabel = mysqli_fetch_array($ambildata)) {
        echo "<tr>";
        echo "<td>".$data_tabel['id_ticket']."</td>";
        echo "<td>".$data_tabel['tanggal_input']."</td>";
        echo "<td>".$data_tabel['nama_pelanggan']."</td>";
        echo "<td>".$data_tabel['deskripsi']."</td>";
        echo "<td>".$data_tabel['nama_teknisi']."</td>";
        echo "<td>".$data_tabel['Status_ticket']."</td></tr>";
    }
                
    ?>
    </table>
    
        <h2>Daftar Ticket</h2> 

    <table width='80%' border=1>

    <tr>
        <th>ID Ticket</th> <th>Tanggal Input</th> <th>Deskripsi</th> <th>Status Ticket</th> <th>ID Pelanggan</th>
    </tr>
    <?php  
    while($data_tabel3 = mysqli_fetch_array($ambildata3)) {
        echo "<tr>";
        echo "<td>".$data_tabel3['id_ticket']."</td>";
        echo "<td>".$data_tabel3['tanggal_input']."</td>";
        echo "<td>".$data_tabel3['deskripsi']."</td>";
        echo "<td>".$data_tabel3['status_ticket']."</td>";
        echo "<td>".$data_tabel3['id_pelanggan']."</td></tr>";
    }
                
    ?>
    </table>
    <a href="add.php">Add New Ticket</a><br/><br/>
    <a href="delete.php">Delete Ticket</a><br/><br/>
    <a href="edit.php">Edit Ticket</a><br/><br/>
    <a href="cari.php">Pencarian Data Pelanggan</a><br/><br/>  
    
    <h2>Daftar Teknisi</h2>

    <table width='50%' border=1>

    <tr>
        <th>ID Karyawan</th> <th>Nama Teknisi</th> <th>ID Ticket</th> <th>Status Ticket</th>
    </tr>
    <?php  
    while($data_tabel2 = mysqli_fetch_array($ambildata2)) {
        echo "<tr>";
        echo "<td>".$data_tabel2['id_karyawan']."</td>";
        echo "<td>".$data_tabel2['nama_teknisi']."</td>";
        echo "<td>".$data_tabel2['id_ticket']."</td>";
        echo "<td>".$data_tabel2['Status_ticket']."</td></tr>";
    }
                
    ?>
    </table>
    <a href="ubah.php">Ubah Ticket yang ditangani</a><br/><br/>
</body>
</html>
