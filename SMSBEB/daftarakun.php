<?php
   session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="Pendaftaran/daftar.css">
  </head>
  <body>
    <div class="header">
      <h2>Daftar</h2>
    </div>
    <form action="prosespendaftaran.php" method="post">
    <div class="input-group">
      <label>Nik</label>
      <input type="text" name="nik" placeholder="NIK"required>
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" placeholder="Nama"required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="Password"required>
    </div>
    <div class="input-group">
      <label>Nis</label>
      <input type="text" name="nis" placeholder="NIS"required>
    </div>

    <div class="input-group">
      <input type="hidden" name="kode" value="user">
    <div class="input-group">
  		<button type="submit" class="btn">DAFTAR</button>
  	</div>
    <p>
			Sudah Punya Akun? <a href="index.php">Login</a>
		</p>
  </form>
</body>
</html>
