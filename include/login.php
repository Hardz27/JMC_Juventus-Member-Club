<?php
session_start();
if (!empty($_SESSION['namauser'])) {
	echo "<center>Anda sudah login sebagai "."$_SESSION[namauser]"." <br>";
	header('location: ../JMC/index.php?modul=home');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../include/css/util.css">
	<link rel="stylesheet" type="text/css" href="../include/css/main.css">
<!--===============================================================================================-->
</head>
<body>


		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "salah"){
				echo "<p>Captcha tidak sesuai.</p>";
			}
		}
		?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="post" action="cek_login.php">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/login.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" >
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" >
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<img src="captcha.php" alt="gambar" />
					<div class="wrap-input100 validate-input m-b-50" >
						<input class="input100" type="text" name="nilaiCaptcha">
						<span class="focus-input100" data-placeholder="Write Captcha Here"></span>
					</div>

<!-- 		<form action="periksa_captcha.php" method="post"> -->
			
				
					<!-- <td><input type ="submit" value="Cek Captcha"></td> -->
				
			
		<!-- </form> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
				<br>
				<br>
				<form method="post" action="cek_login.php">
						<input type="hidden" name="username" value="guest">
						<input type="hidden" name="pass" value="guest">
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login as Guest!
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="../include/js/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../include/js/main.js"></script>

</body>
</html>