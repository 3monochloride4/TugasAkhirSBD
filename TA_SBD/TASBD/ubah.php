<html>
<head>
    <title>Change Finished Ticket</title>
</head>

<body>
    <a href="ticket.php">Kembali ke Daftar Ticket</a>
    <br/><br/>

    <h3>Ubah Ticket yang ditangani Teknisi</h3>
    <form action="ubah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Karyawan</td>
                <td><input type="text" name="idkaryawan"></td>
            </tr>
            <tr> 
                <td>ID Ticket baru</td>
                <td><input type="text" name="idbaru"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Ubah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $idkar = $_POST['idkaryawan'];
        $idnew = $_POST['idbaru'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($koneksi, "UPDATE teknisi SET id_ticket='$idnew' WHERE id_karyawan=$idkar");


        echo "ID Ticket berhasil diubah. <a href='ticket.php'>Lihat Ticket</a>";
    }
    ?>
</body>
</html>
