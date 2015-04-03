<?php
include "admin/connect.php";
$nama_toko = $_POST['nama_toko'];
$alamat_toko = $_POST['alamat_toko'];
$layanan_toko = $_POST['layanan_toko'];
$tahun_berdiri = $_POST['tahun_berdiri'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$hari_buka = $_POST['hari_buka'];
$gambar = $_FILES["file"]["name"];

$file_basename = substr($gambar, 0, strripos($gambar, '.')); // get file extention
$file_ext = substr($gambar, strripos($gambar, '.')); // get file name
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "PNG", "JPEG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$link = "gambar/" . $nama_toko . ".jpg";
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/JPEG") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/PNG") || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        if (file_exists($link)) {
            unlink($link);
            move_uploaded_file($_FILES["file"]["tmp_name"], $link);
            $query = mysql_query("INSERT INTO `data_toko`(`nama_toko`, `alamat_toko`, `layanan_toko`, `tahun_berdiri`, `hari_buka`, `jam_mulai`, `jam_selesai`)"
                    . " VALUES('$nama_toko', '$alamat_toko', '$layanan_toko', '$tahun_berdiri', '$hari_buka', '$jam_mulai', '$', '$jam_selesai')");
            if ($query === TRUE) {
                ?><script language="JavaScript">alert('Data Anda telah tersimpan');
                        document.location = 'session.php'</script><?php
            } else {
                ?><script language="JavaScript">alert('Data gagal disimpan');
                        document.location = 'tambah.php'</script><?php
                echo mysql_error();
            }
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $link);
            $query = mysql_query("INSERT INTO `data_toko`(`nama_toko`, `alamat_toko`, `layanan_toko`, `tahun_berdiri`, `hari_buka`, `jam_mulai`, `jam_selesai`)"
                    . " VALUES('$nama_toko', '$alamat_toko', '$layanan_toko', '$tahun_berdiri', '$hari_buka', '$jam_mulai', '$', '$jam_selesai')");
            if ($query === TRUE) {
                ?><script language="JavaScript">alert('Data Anda telah tersimpan');
                        document.location = 'session.php'</script><?php
            } else {
                ?><script language="JavaScript">alert('Data gagal disimpan');
                        document.location = 'tambah.php'</script><?php
                echo mysql_error();
            }
        }
    }
} else {
    ?><script language="JavaScript">alert('error');
            document.location = 'tambah.php'</script><?php
}
?>