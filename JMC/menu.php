<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="images/jlogo.png" alt="">
			</a>
			<div class="user-panel">
				<a href="../include/logout.php">Logout</a> <!--  /  <a href="daftar.php">Register</a> -->
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.php?modul=home">Home</a></li>
					<li><a href="index.php?modul=news&act=0">News</a></li>
					<li><a href="index.php?modul=galery&act=">Galery and museum</a></li>
					<!-- <li><a href="index.php?modul=forum">Forums</a></li> -->
					<?php 
					// if (!empty ($_SESSION['namauser']) and !empty ($_SESSION['passuser'])) {
					// 	echo '<li><a href="index.php?modul=contact">Contact US!</a></li>';
					// }
					?>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->
