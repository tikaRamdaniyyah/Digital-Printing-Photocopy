<?php
require_once 'header.php';
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-4 column">
            <ul class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="#">Menu</a>
                </li>
                <li>
                    <a href="tambah.php">Tambah Toko</a>
                </li>
                <li class="disabled">
                    <a href="#">Hapus Toko</a>
                <li class="disabled">
                    <a href="logout.php">Ubah Toko</a>
                </li>
                <li class="disabled">
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
            </div>
        <div class="col-md-8 column">
            <div class="col-md-8 col-md-offset-1">
            <div class="jumbotron">
                <h1>Selamat Datang!</h1>
            </div>
            </div>
        </div>
                    <?php
                    require_once 'footer.php';
                    ?>