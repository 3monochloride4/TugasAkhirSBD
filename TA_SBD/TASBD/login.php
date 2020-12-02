<?php
  include './config.php';
  $table_name = 'admin';

  session_start();
  // menyimpan data yang diinputkan kedalam variabel
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  // query sql untuk autentifikasi
  $query = "SELECT `username`, `pass_word`, `privilege` FROM `admin` where username='$username' AND pass_word='$password';";
  $result = mysqli_query($koneksi, $query);

  if(mysqli_num_rows($result))
	{
    if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $_SESSION['username']=$row['username'];
      $_SESSION['password']=$row['pass_word'];
      echo ("Login anda sukses <br>");
      echo ('Jika gagal, silahkan klik di <a href="index.php">sini</a>.');
      header('refresh: 3; url= ticket.php');
    } 
	}
	else{
    echo("<script>alert('Invalid Username or Password. Try Again!');</script>");
    header('refresh: 0; url= index.php');
  }
?>