<?php
require_once 'header.php';
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Asik Surabaya</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">SPBU</a></li>
                    <li><a href="#contact.html">Hotel</a></li>
                    <li><a href="#contact">Sport Center</a></li>
                    <li><a href="#contact.html">Bengkel</a></li>
                    <li><a href="#contact.html">Kuliner</a></li>
                </ul>

            </div><!--/.nav-collapse -->

        </div>
    </div>
</div>
<div class="container">

    <div class="masthead">
        <h3 class="muted"></h3>
        <div class="navbar">
            <div class="span2"> </div>
            <form name="insert" action="simpan_spbu.php" method="POST" enctype='multipart/form-data'>
                <h1>Menambah Informasi SPBU</h1>
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span2">
                            <!--Sidebar content-->
                        </div>
                        <div class="span10">
                            <!--Body content-->
                        </div>
                    </div>
                </div>
                <label>Kode. SPBU</label>
                <input type="text" name="id_spbu">
                <label>Lokasi</label>
                <textarea rows="3" name="lokasi"></textarea>
                <label>Fasilitas</label>
                <textarea rows="2" name="fasilitas"></textarea>
                <label>Produk yang dijual</label>
                <textarea rows="2" name="produk"></textarea>
                <label>Jam Operasional</label>
                <select class="form-control" name="jam_mulai">
                    <option>00.00</option>
                    <option>01.00</option>
                    <option>02.00</option>
                    <option>03.00</option>
                    <option>04.00</option>
                    <option>05.00</option>
                    <option>06.00</option>
                    <option>07.00</option>
                    <option>08.00</option>
                    <option>09.00</option>
                    <option>10.00</option>
                    <option>11.00</option>
                    <option>12.00</option>
                    <option>13.00</option>
                    <option>14.00</option>
                    <option>15.00</option>
                    <option>16.00</option>
                    <option>17.00</option>
                    <option>18.00</option>
                    <option>19.00</option>
                    <option>20.00</option>
                    <option>21.00</option>
                    <option>22.00</option>
                    <option>23.00</option>
                </select> - 
                <select class="form-control" name="jam_selesai">
                    <option>00.00</option>
                    <option>01.00</option>
                    <option>02.00</option>
                    <option>03.00</option>
                    <option>04.00</option>
                    <option>05.00</option>
                    <option>06.00</option>
                    <option>07.00</option>
                    <option>08.00</option>
                    <option>09.00</option>
                    <option>10.00</option>
                    <option>11.00</option>
                    <option>12.00</option>
                    <option>13.00</option>
                    <option>14.00</option>
                    <option>15.00</option>
                    <option>16.00</option>
                    <option>17.00</option>
                    <option>18.00</option>
                    <option>19.00</option>
                    <option>20.00</option>
                    <option>21.00</option>
                    <option>22.00</option>
                    <option>23.00</option>
                </select>
                <label>lokasi pada peta</label>
                <input type="text" name="lat">
                <input type="text" name="long">
                <label>Upload Gambar SPBU</label>
                <input type="file" name="file">
                <button type="submit" class="btn" name="submit">Posting</button>
            </form>
        </div><!-- /.navbar -->

    </div> <!-- /container -->


    <?php
    require_once 'footer.php';
    ?>