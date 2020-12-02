<html>
<head>
    <title>Delete Ticket</title>
</head>

<body>
    <a href="ticket.php">Kembali ke Daftar Ticket</a>
    <br/><br/>

    <h3>Hapus Ticket</h3>
    <form action="delete.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Ticket</td>
                <td><input type="text" name="idticket"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Hapus"></td>
            </tr>
        </table>
    </form>
<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
if (isset($_POST['Submit'])) {
    $id = $_POST['idticket'];

    $result = mysqli_query($koneksi, "DELETE FROM ticket WHERE id_ticket=$id");

    header("Location:ticket.php");
}

?>
