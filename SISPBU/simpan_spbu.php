<?php
include "config/connect.php";
$id_spbu = $_POST['id_spbu'];
$lokasi = $_POST['lokasi'];
$fasilitas = $_POST['fasilitas'];
$produk = $_POST['produk'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$gambar = $_FILES["file"]["name"];

$file_basename = substr($gambar, 0, strripos($gambar, '.')); // get file extention
$file_ext = substr($gambar, strripos($gambar, '.')); // get file name
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "PNG", "JPEG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$link = "gambar/" . $id_spbu . ".jpg";
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/JPEG") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/PNG") || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        if (file_exists($link)) {
            unlink($link);
            move_uploaded_file($_FILES["file"]["tmp_name"], $link);
            $query = mysql_query("INSERT INTO `data_spbu` (`id_spbu`, `lokasi`, `fasilitas`, `produk`, `jam_mulai`, `jam_selesai`, `lat`, `long`)"
                    . "VALUES ('$id_spbu', '$lokasi', '$fasilitas', '$produk', '$jam_mulai', '$jam_selesai', '$lat', '$long')");
            if ($query === TRUE) {
                ?><script language="JavaScript">alert('Data Anda telah tersimpan');
                        document.location = 'index.php'</script><?php
            } else {
                ?><script language="JavaScript">alert('Data gagal disimpan');
                        document.location = 'insert.php'</script><?php
                echo mysql_error();
            }
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $link);
            $query = mysql_query("INSERT INTO `data_spbu` (`id_spbu`, `lokasi`, `fasilitas`, `produk`, `jam_mulai`, `jam_selesai`, `lat`, `long`)"
                    . "VALUES ('$id_spbu', '$lokasi', '$fasilitas', '$produk', '$jam_mulai', '$jam_selesai', '$lat', '$long')");
            if ($query === TRUE) {
                ?><script language="JavaScript">alert('Data Anda telah tersimpan');
                        document.location = 'index.php'</script><?php
            } else {
                ?><script language="JavaScript">alert('Data gagal disimpan');
                        document.location = 'insert.php'</script><?php
                echo mysql_error();
            }
        }
    }
} else {
    ?><script language="JavaScript">alert('error');
            document.location = 'insert.php'</script><?php
}
?>