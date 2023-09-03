<?php
session_start();
$koneksi = new mysqli("localhost","root","","db_lelang");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Index</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Lelang</a></li>
            <?php if(isset($_SESSION['tabel_masyarakat'])) : ?>
            <li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin ?')">Logout</a></li>
				<li><a href="#">Riwayat</a></li>
				<!-- Jika Sudah Belum Login-->
				<?php else: ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Daftar</a></li>
				<?php endif ?>	
        </ul>
    </nav>

    <h1>Selamat datang di Aplikasi Lelang</h1>


</body>
</html>