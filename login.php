<?php 
	session_start();
	$koneksi = new mysqli("localhost","root","","db_lelang");

  if (isset($_POST["login"])) {
        
        $ambil = $koneksi->query("SELECT * FROM tabel_masyarakat WHERE username='$_POST[username]' AND password='$_POST[password]'");
        //menghitung account yang cocok pada db
        $akunyangcocok = $ambil->num_rows;
        if ($akunyangcocok==1) {
          $_SESSION['tabel_masyarakat'] = $ambil->fetch_assoc();
        
          echo "<script> alert('Login Berhasil'); </script>";
          echo "<script> location='index.php'; </script>";
          
        }
        else {
          echo "<script> alert('Login Gagal, Tekan Ok Untuk Coba Lagi'); </script>";
          echo "<script> location='login.php'; </script>";
        }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if(isset($login_error)) : ?>
        <p><?php echo $login_error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" name="login" value="Login">
    </form>
    
</body>
</html>