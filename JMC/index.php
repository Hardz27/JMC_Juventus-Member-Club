<?php
session_start();
if ($_SESSION['namauser']!="guest") {
 	header('location: ../admin/index.php?page=home');
 } 
//error_reporting(0);

function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

//pabiila user yang mengakses tidak sah
if (empty ($_SESSION['namauser']) and empty ($_SESSION['passuser'])) {
	echo "<center>Untuk megakses halaman ini, anda harus login terlebih dahulu <br>";
	echo "<a href=../include/login.php><b>LOGIN</b></a></center";
}

//apabila user yang mengakses sah
else {
	include "../include/koneksi.php";		
	?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Game Warrior Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="images/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php include "menu.php"; ?>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<?php
			$tampil=mysqli_query($koneksi, "SELECT * FROM profile");
			while ($r=mysqli_fetch_array($tampil)) {
				?>
			<div class="hs-item set-bg" data-setbg="images/<?php 	echo "$r[images]"; ?>">
				<div class="hs-text">
					<div class="container">

						<h2><?php 	echo "$r[judul]"; ?></h2>
						<p><?php 	echo "$r[isi]"; ?></p>
						<!-- <a href="#" class="site-btn">Read More</a> -->
					</div>
				</div>
			</div>
			<?php 	} ?>

		</div>
	</section>
	<!-- Hero section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<?php
				$news=mysqli_query($koneksi, "SELECT * FROM news");
				  while ($res=mysqli_fetch_array($news)) {
				?>
				<div class="nt-item"><span class="<?php echo "$res[tag]"; ?>"><?php echo "$res[tag]"; ?></span><?php echo "$res[judul]"; ?></div>
				<!-- <div class="nt-item"><span class="Liga">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="Champions">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div> -->
				<?php 	} ?>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<?php include "konten.php"; ?>


	
	

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is modified with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://facebook.com/bachdim.7" target="_blank">Sofyan Maulana</a> :')
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>

<?php } ?>