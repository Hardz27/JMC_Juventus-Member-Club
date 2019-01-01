<?php
	include "koneksi.php";
	$login=mysqli_query($koneksi,"select * from admin where
	id_user='$_POST[username]' and password='$_POST[pass]'");

	$dapat=mysqli_num_rows($login);
	$r=mysqli_fetch_array($login);
	if($dapat > 0)
	{
		 session_start();
		 if ($_POST[username]=='guest') {
			$_SESSION['namauser']=$r['id_user'];
		 	$_SESSION['passuser']=$r['password'];
		 	header('location:../JMC/index.php?modul=home');
		 }
		else{
			 if($_SESSION["Captcha"]!=$_POST["nilaiCaptcha"]){
				header("location:login.php?pesan=salah");
			}else{		
				echo "<p>Captcha Anda Benar</p>";
			
			 $_SESSION['namauser']=$r['id_user'];
			 $_SESSION['passuser']=$r['password'];
			 $_SESSION['facebook']=$r['facebook'];
			 $_SESSION['youtube']=$r['youtube'];
			 $_SESSION['instagram']=$r['instagram'];
			 header('location:../admin/index.php?page=home');
			}
		} 
	}
	else
	{
		 print "<script>
		 alert(\"Periksa Pengisian Form\");
		 location.href = \"login.php\";
		 </script>";
	}
?>