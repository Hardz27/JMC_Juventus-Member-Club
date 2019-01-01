<?php
include "../include/koneksi.php";
include "../include/konversi_tgl.php";
//bagian home admin

if ($_GET['modul']=='home') {
echo	'<!-- Feature section -->
	<section class="feature-section spad">
		<div class="section-title">
			<h2>Latest News!</h2>
		</div>
		<div class="container">
			<div class="row">';

				  $news=mysqli_query($koneksi, "SELECT * FROM `news` ORDER BY `id_berita` DESC ");
				  $i = 0;
				  $mfoto = array();
				  $mjudul = array();
				  $misi = array();
				  $madmin = array();
				  while ($i < 4) {
				  	$res=mysqli_fetch_array($news);
				  	$mfoto[$i] = $res['foto'];
				  	$mjudul[$i] = $res['judul'];

				  	$madmin[$i] = $res['id_admin'];
				?>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="images/<?php echo "$res[foto]"; ?>">
						<span class="cata <?php echo "$res[tag]"; ?>"><?php echo "$res[tag]"; ?></span>
						<div class="fi-content text-white">
							<h5><a href="#"><?php 	echo "$res[judul]"; ?></a></h5>
							<?php
								$long_string = $res['isi'];
								$limited_string = limit_words($long_string, 10);
								$misi[$i] = $limited_string;							
							?>
							<p><?php  echo $limited_string; ?> ... </p> <a href="index.php?modul=news&id=<?php echo'$res[id_berita]'; ?>">
							<a href="#" class="fi-comment">Posted by : <?php 	echo "$res[id_admin]"; ?></a>
						</div>
					</div>
				</div>
				<?php $i++; }
				echo '</div>
		</div>
	</section>
	<!-- Feature section end -->

	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">';
			  $data=mysqli_query($koneksi, "SELECT * FROM event");
				  while ($resu=mysqli_fetch_array($data)) {
				?>
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic"><?php echo "$resu[type]"; ?></div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="images/<?php echo "$resu[foto]"; ?>"></div>
							<div class="ti-text">
								<h4><?php echo "$resu[judul]"; ?></h4>
								<ul>
									<li><span>Tournament Beggins:</span> <?php echo "$resu[waktu]"; ?></li>
									<li><span>Tounament Ends:</span> <?php echo "$resu[batas]"; ?></li>
									<li><span>Participants:</span> <?php echo "$resu[quota]"; ?></li>
									<li><span>Tournament Location:</span> <?php echo "$resu[lokasi]"; ?></li>
								</ul>
								<p><span>Prizes:</span> <?php echo "$resu[hadiah]"; ?></p>								
							</div>
						</div>
					</div>
				</div>
				<?php }

				echo '</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	<!-- Review section -->
	<section class="review-section spad set-bg" data-setbg="images/jreview-bg.png">
		<div class="container">
		<div class="match-title">Match</div>
			<div class="section-title">
				<h2>Recent Player Ratings</h2>
			</div>
			<div class="row">';

			$rating=mysqli_query($koneksi, "SELECT * FROM rating");
			$no = 1;
			   while(($resul=mysqli_fetch_array($rating)) && ($no < 5)){
			   	if($no == 1){
			   		$pos = 'yellow';
			   	}
			   	elseif($no == 2){
			   		$pos = 'purple';
			   	}
			   elseif($no == 3){
			   		$pos = 'green';
			   	}
			   	elseif($no == 4){
			   		$pos = 'pink';
			   	}
				?>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="images/team/<?php echo "$resul[foto]"; ?>">
							<div class="score <?php echo "$pos"; ?>"><?php echo "$resul[rating]"; ?></div>
						</div>
						<div class="review-text">
							<h5><?php echo "$resul[nama]"; ?></h5>
							<p><?php echo "$resul[deskripsi]"; ?></p>
							</div>
					</div>
				</div>
		<?php $no++; } ?>
						
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="images/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="images/jfooter-logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title" style="text-align: center;">Latest Match!</h4>
						<div class="latest-blog">
							<?php
								$mvp=mysqli_query($koneksi, "SELECT * FROM pertandingan ORDER BY id_match DESC");
								$i = 0;
					   			while($i < 3){
					   			$result=mysqli_fetch_array($mvp);
					   		?>
							<div class="lb-item">
								<div class="lb-thumb set-bg" style=" border-radius: 50%;" data-setbg="images/<?php echo $result['foto']?>"></div>
								<div class="lb-content">
									<div class="lb-date"><?php echo $result['kompetisi']?></div>
									<p><?php echo $result['hasil']?></p>
									<p>Man of the Match : <?php echo $result['mvp']?></p>
									
								</div>
							</div>
							<?php $i++; } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<?php
						$mvp=mysqli_query($koneksi, "SELECT mvp FROM pertandingan ORDER BY id_match DESC");
			   			$result=mysqli_fetch_array($mvp);
			   			?>
						<h4 class="fw-title" style="text-align: center;">Recent Team MVP!</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg='images/team/<?php echo $result['mvp']?>.png'></div>
								<div class="tc-content" style="padding-left: 0%; text-align: center;">
									<p><a href="#">Congratulation!</a>
										<br>
										<span>to</span>
										<br>
										<?php echo $result['mvp']?>
										<br>
										for become the MVP!
										<br>
										on
										<br>
										Juventus vs Real Madrid!
										<br>
										<br>
									</p>
									<div class="tc-date"><?php echo tgl_indo(date("Ymd")); ?></div>

								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

<?php
	
}

//bagian berita
elseif ($_GET['modul']=='news') {
	include "modul/news.php";
}
//bagian galeri
elseif ($_GET['modul']=='galery') {
	include "modul/galery.php";
}

//bagian buku tamu
elseif ($_GET['modul']=='forum') {
	include "modul/forum.php";
}
// Apabila modul tidak ditemukan
elseif ($_GET['modul']=='contact') {
	include "modul/contact.php";
}
else{
	echo "<p><b>MODUL BELUM ADA</b></p>";
}
?>
