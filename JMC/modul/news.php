<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="container">
			<div class="row">
				<?php

				$post = 0;
				$max = 2;
				$add = $_GET['act'];
				$akhir = $max+$add;
				$data=mysqli_query($koneksi, "SELECT * FROM news ORDER BY id_berita DESC");
				$batas = mysqli_num_rows($data);
				if($akhir-$batas==1){
					$akhir -= 1;
				}
				  while ($post < $akhir ) {
				  	$news=mysqli_fetch_array($data); 
				?>
				<div class="col-md-12">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="images/<?php echo "$news[foto]" ?>">
							<div class="cata <?php echo "$news[tag]" ?> "><?php echo "$news[tag]" ?></div>
						</div>
						<div class="review-text">
							<h4><?php echo "$news[judul]" ?></h4>
							<p><?php echo "$news[isi]" ?></p>
							<div class="rating">
								<a>Posted by : <?php echo "$news[id_admin]" ?></a>
<!-- 								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i> -->
							</div>
						</div>
					</div>
				</div>
				<?php $post++; } ?>
			</div>
			<form method="post" action="?modul=news&act=<?php $akhir+2; echo $akhir;?>">
			<?php if($akhir < $batas){
				echo '<div class="text-center pt-4">
						<input type="submit" class="site-btn btn-sm" value="Load More">
					  </div>';
			} ?>
			
			</form>
		</div>
	</section>
	<!-- Page section end -->


