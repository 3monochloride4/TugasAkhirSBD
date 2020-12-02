<html>
<head>
    <title>Add Ticket</title>
</head>

<body>
    <a href="ticket.php">Kembali ke Daftar Ticket</a>
    <br/><br/>
    <h3>Tambahkan Ticket</h3>
    <form action="add.php" method="post" name="form1">
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
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr> 
                <td>ID Pelanggan</td>
                <td><input type="text" name="idpelanggan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['idticket'];
        $tanggal = $_POST['tgl'];
        $deskripsi = $_POST['desc'];
        $status = $_POST['status'];
        $idpel = $_POST['idpelanggan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO ticket (id_ticket, tanggal_input, deskripsi, status_ticket, id_pelanggan) VALUES('$id','$tanggal','$deskripsi','$status','$idpel')");


        echo "Ticket berhasil ditambahkan. <a href='ticket.php'>Lihat Ticket</a>";
    }
    ?>
</body>
</html>
