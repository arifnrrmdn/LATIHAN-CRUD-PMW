<?php
    include("../koneksi/koneksi.php");
?>

<h3>TAMBAH DATA MAHASISWA</h3>
<br><hr><br>
<?php
if (!isset($_POST['submit'])){
    ?>
    <form enctype="multipart/form-data" method="post">
        <table width="100%" border="0">
            <tr>
                <td width="27%">NIM</td>
                <td width="4%">:</td>
                <td width="69%"><input type="text" name="nim" size="30" placeholder="NIM"></td>
            </tr>
            <tr>
                <td width="27%">NAMA</td>
                <td width="4%">:</td>
                <td width="69%"><input type="text" name="nama" id="nama" size="30" placeholder="NAMA"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td>
                    <label>
                        <input type="radio" name="jk" value="Laki-Laki" id="RadioGroup1_0" />Laki-Laki
                    </label>
                    <label>
                        <input type="radio" name="jk" value="Perempuan" id="RadioGroup1_0" />Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td height="50">JURUSAN</td>
                <td>:</td>
                <td>
                    <label>
                        <select name="jurusan">
                            <option value="">-=Pilih=-</option>
                            <option value="Sistem Informasi">SISTEM INFORMASI</option>
                            <option value="Teknik Informatika">TEKNIK INFORMATIKA</option>
                            <option value="Teknik Komputer">TEKNIK KOMPUTER</option>
                        </select>
                    </label> <br>
                </td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td><input type="text" name="password" id="password" size="30" placeholder="PASSWORD"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="submit" id="submit" value="TAMBAH">
                </td>
            </tr>
        </table>
        </form>

        <?php
}else{

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $jur = $_POST["jurusan"];
    $password = md5($_POST["password"]);

    //input data mahasiswa

    $insertMhs = "INSERT INTO mahasiswa VALUE ('$nim','$nama','$jk','$jur','$password')";
    $queryMhs = mysqli_query($koneksi, $insertMhs);

    if($queryMhs){
        echo"<script>alert('Data Mahasiswa Berhasil Disimpan!') </script>";
        echo"<script type='text/javascript'>window.location = 'mahasiswaView.php'</script>";
    }else{
        echo"<script>alert('Data Mahasiswa Gagal Disimpan!') </script>";
        echo"<script type='text/javascript'>window.location = 'mahasiswaView.php'</script>";
    
    }

}

?>

<a href="mahasiswaView.php">&raquo;KEMBALI</a>

