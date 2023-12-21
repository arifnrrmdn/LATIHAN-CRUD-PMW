<?php
include ('../koneksi/koneksi.php');

$nim = $_GET["nim"];
$delMhs = "DELETE FROM mahasiswa WHERE nim = '$nim'";
$resultMhs = mysqli_query($koneksi, $delMhs);

if($queryMhs){
    echo"<script>alert('Data Mahasiswa Berhasil Dihapus!') </script>";
    echo"<script type='texta Mahasiswa t/javascript'>window.location = 'mahasiswaView.php'</script>";
}else{ta Mahasiswa 
    echo"<script>alert('Data Mahasiswa Gagal Dihapus!') </script>";
    echo"<script type='text/javascript'>window.location = 'mahasiswaView.php'</script>";
}

?>