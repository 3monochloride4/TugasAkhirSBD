<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="ticket.php">Kembali ke Daftar Ticket</a>
    <br/><br/>

    <h3>Silahkan isi untuk mengubah data Ticket</h3>

    <form action="edit.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Ticket</td>
                <td><input type="text" name="idticket"></td>
            </tr>
            <tr> 
                <td>Tanggal Input</td>
                <td><input type="text" name="tgl"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><textarea name="desc" id="deskripsi" cols="30" rows="10"></textarea></td>
            </tr>
            <tr> 
                <td>ID Pelanggan</td>
                <td><input type="text" name="idpel"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit1" value="Perbarui"></td>
            </tr>
        </table>
    </form>

    <h3>Silahkan isi untuk mengubah status Ticket</h3>

    <form action="edit.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Ticket</td>
                <td><input type="text" name="idticket"></td>
            </tr>
            <tr> 
                <td>Status Terbaru</td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit2" value="Perbarui"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit1']))
{   
    $id = $_POST['idticket'];

    $tanggalinput = $_POST['tgl'];
    $deskripsi = $_POST['desc'];
    $idpelanggan = $_POST['idpel'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE ticket SET tanggal_input='$tanggalinput',deskripsi='$deskripsi', id_pelanggan = '$idpelanggan' WHERE id_ticket=$id");

    // Redirect to homepage to display updated user in list
    echo "Data Ticket berhasil diubah. <a href='ticket.php'>Lihat Hasil</a>";
}

if(isset($_POST['submit2'])){
    $id = $_POST['idticket'];
    $status = $_POST['status'];

    $result = mysqli_query($koneksi, "UPDATE ticket SET status_ticket='$status' WHERE id_ticket=$id");
    echo "Status Ticket berhasil diubah. <a href='ticket.php'>Lihat Hasil</a>";
}
?>