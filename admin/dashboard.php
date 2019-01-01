    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logoX.png" alt="" /></a>
                <strong><img src="img/jadmin.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
                    <?php 
                        $adm = $_SESSION['namauser'];
                        $tampil=mysqli_query($koneksi, "SELECT * FROM admin where id_user='$adm'");
                        $info=mysqli_fetch_array($tampil);
                    ?>
					<a href="#"><img src="img/admin/<?php echo $info['image'] ?>" alt="" /></a>

					<h2><span class="min-dtn"><?php echo $_SESSION['namauser'] ?></span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
                        <?php
                            $fb = $_SESSION['facebook'];
                            $yt = $_SESSION['youtube'];
                            $ig = $_SESSION['instagram'];
                        ?>
						<li><a href="<?php echo $fb ?>"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="<?php echo $yt ?>"><i class="icon nalika-youtube"></i></a></li>
						<li><a href="<?php echo $ig ?>"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.php?page=home">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Home</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Product Payment" href="index.php?page=new-post"><span class="mini-sub-pro">New Post</span></a></li>
                                <li><a title="Update Info" href="index.php?page=update_info"><span class="mini-sub-pro">View All Post</span></a></li>
                                <!-- <li><a title="Product Detail" href="index.php?page=preview"><span class="mini-sub-pro">Preview last update</span></a></li>    -->                             
                                <!-- <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
