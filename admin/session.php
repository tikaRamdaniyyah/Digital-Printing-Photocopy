<?php
session_start();
if (ISSET($_SESSION['signin'])){?>
    <script language="JavaScript">document.location='index.php';</script><?php
} else {
    header('location: signin.php');
}
?>
