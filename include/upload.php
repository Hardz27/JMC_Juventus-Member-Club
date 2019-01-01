<?php
// Connect to Database
session_start();
$host = mysqli_connect("localhost", "root", "", "fans");


if($_POST['tab']=='news'){
  $tag=$_POST['tag'];
  $judul=$_POST['judul'];
  $isi=$_POST['isi'];
  $admin = $_SESSION['namauser'];
  $lokasi_file = $_FILES['image']['tmp_name'];
  $tipe_file   = $_FILES['image']['type'];
  $nama_file   = $_FILES['image']['name'];
  
  $direktori   = "../admin/img/news/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    $sql = "INSERT INTO news VALUES (null,'$tag','$judul','$isi','$nama_file','$admin')";
    $aksi = mysqli_query($host,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo "maaf gagal memasukan gambar";
    }else{
     header('location: ../admin/index.php?page=new-post');           
    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
}



if($_POST['tab']=='match-update'){
  $kompetisi = $_POST['kompetisi'];
  $hasil = $_POST['hasil'];
  $mvp = $_POST['mvp'];
  $lokasi_file = $_FILES['image']['tmp_name'];
  $tipe_file   = $_FILES['image']['type'];
  $nama_file   = $_FILES['image']['name'];
  
  $direktori   = "../JMC/images/match/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
    echo $kompetisi,$hasil,$mvp,$nama_file;

    // code C
    $sql = "INSERT INTO pertandingan VALUES (null,'$kompetisi','$hasil','$mvp','$nama_file')";
    $aksi = mysqli_query($host,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo "maaf gagal memasukan gambar";
    }else{
     header('location: ../admin/index.php?page=new-post');   
    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
}

if($_POST['tab']=='rating'){
  $id_pos = $_POST['id_pos'];
  $nama = $_POST['nama'];
  $rating = $_POST['rating'];
  $deskripsi = $_POST['deskripsi'];
  $lokasi_file = $_FILES['image']['tmp_name'];
  $tipe_file   = $_FILES['image']['type'];
  $nama_file   = $_FILES['image']['name'];
  
  $direktori   = "../JMC/images/team/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    $sql = "UPDATE `rating` SET `nama`='$nama',`rating`='$rating',`foto`='$nama_file',`deskripsi`='$deskripsi' WHERE id_pos='$id_pos'";
    $aksi = mysqli_query($host,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo $nama,$id_pos,$rating,$deskripsi,$nama_file;
    echo "maaf gagal memasukan gambar";
    }else{
     header('location: ../admin/index.php?page=new-post');   
    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
}

if($_POST['tab']=='tournament'){
  $tournament = $_POST['tournament'];
  $judul = $_POST['judul'];
  $hadiah = $_POST['hadiah'];
  $waktu = $_POST['waktu'];
  $batas = $_POST['batas'];
  $quota = $_POST['quota'];
  $lokasi = $_POST['lokasi'];
  $lokasi_file = $_FILES['image']['tmp_name'];
  $tipe_file   = $_FILES['image']['type'];
  $nama_file   = $_FILES['image']['name'];
  
  $direktori   = "../JMC/images/event/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    $sql = "INSERT INTO event VALUES ('','$tournament','$judul','$nama_file','$hadiah','$waktu','$batas','$quota','$lokasi')";
    $aksi = mysqli_query($host,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo "maaf gagal memasukan gambar";
    }else{
     header('location: ../admin/index.php?page=new-post');   
    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
}

if($_POST['tab']=='galery'){
  $caption=$_POST['caption'];
  $lokasi_file = $_FILES['image']['tmp_name'];
  $tipe_file   = $_FILES['image']['type'];
  $nama_file   = $_FILES['image']['name'];
  
  $direktori   = "../JMC/images/museum/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    $sql = "INSERT INTO galeri VALUES (null,'$caption','$nama_file')";
    $aksi = mysqli_query($host,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo "maaf gagal memasukan gambar";
    }else{
     header('location: ../admin/index.php?page=new-post');   
    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
}

elseif($_GET['page']=='edit'){
          $tag=$_POST['tag'];
          $judul=$_POST['judul'];
          $isi=$_POST['isi'];
          $admin = $_SESSION['namauser'];
          $lokasi_file = $_FILES['image']['tmp_name'];
          $tipe_file   = $_FILES['image']['type'];
          $nama_file   = $_FILES['image']['name'];
          
          $direktori   = "../admin/img/news/$nama_file";
          // end of code B
           
          if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file,$direktori); 
           
            // code C
            $sql = "UPDATE `news` SET `tag`='$tag',`judul`='$judul',`isi`='$isi',`foto`='$nama_file',`id_admin`='$admin' WHERE id_berita='$_GET[id]'";
            $aksi = mysqli_query($host,$sql);
            // end of code C
             
            // code D
            if (!$aksi) {
            echo "maaf gagal memasukan gambar";
            }else{
              header('location: ../admin/index.php?page=update_info');                 
            }
            // end of code D
             
          }else{
            echo "terjadi kesalahan";  
          }
    }

else{
  echo "Gak masuk kemana mana";
}

?>