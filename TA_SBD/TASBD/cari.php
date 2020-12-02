<?php
include_once("config.php");
?>
<a href="ticket.php">Kembali ke Daftar Ticket</a>
<form method = "post">
<input type = "text" name = "pencarian" placeholder = "cari...">
<input type="submit" name="Submit" value="Cari">
<form>
<br/>
<br/>

<table border=3>
<tr>
    <td>ID Pelanggan</td> <td>Nama Pelanggan</td> <td>Alamat</td> <td>No. Telepon</td>
</tr>

<?php
if(!ISSET($_POST['Submit'])){

    $ambildata = "SELECT * FROM pelanggan";
    $result = mysqli_query($koneksi, $ambildata);
    while ($data_pelanggan = mysqli_fetch_array($result)){
    
    ?>
    <tr>
     <td><?php echo $data_pelanggan['id_pelanggan']; ?></td>
     <td><?php echo $data_pelanggan['nama_pelanggan']; ?></td>
     <td><?php echo $data_pelanggan['alamat']; ?></td>
     <td><?php echo $data_pelanggan['nomor_telepon']; ?></td>
    </tr>
    <?php 
    } 
} 
?>

<?php 
if (ISSET($_POST['Submit'])){
     $cari = $_POST['pencarian'];
     $caridata = "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%$cari%'";
     
     $result2 = mysqli_query($koneksi, $caridata);
     while ($data_pelanggan2 = mysqli_fetch_array($result2)){
     
     ?>
    <tr>
     <td><?php echo $data_pelanggan2['id_pelanggan']; ?></td>
     <td><?php echo $data_pelanggan2['nama_pelanggan']; ?></td>
     <td><?php echo $data_pelanggan2['alamat']; ?></td>
     <td><?php echo $data_pelanggan2['nomor_telepon']; ?></td>
    </tr>
    <?php 
    } 
} 
?>
</table>