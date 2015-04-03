<?php
session_start();
include "config/connect.php"; 
$id=$_POST['id'];
$password=$_POST['password'];

$query=mysql_query("select * from admin where user_name='$id' and password=MD5('$password')");    

$cek=mysql_num_rows($query);
if($cek){
$_SESSION['sesi']=$id;
?><script language="JavaScript">alert('Selamat Datang :)');
document.location='index.php';</script><?php 
}else{
?><script language="JavaScript">alert('Username/Password Anda salah! Mohon masukkan data yang benar untuk login.');
document.location='login.php';</script><?php 
echo mysql_error();
}
?>