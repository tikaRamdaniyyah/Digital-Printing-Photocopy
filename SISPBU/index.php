<?php
session_start();
if (ISSET($_SESSION['sesi'])){?>
    <script language="JavaScript">document.location='daftar.php';</script><?php
} else {
    header('location: login.php');
}
?>
