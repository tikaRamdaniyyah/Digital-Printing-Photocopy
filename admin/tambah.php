<?php
require_once 'header.php';
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-3 column">
            <ul class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="#">Menu</a>
                </li>
                <li>
                    <a href="#">Tambah Toko</a>
                </li>
                <li class="disabled">
                    <a href="#">HaPus Toko</a>
                </li>
                <li class="disabled">
                    <a href="#">Ubah Toko</a>
                </li>
                <li class="disabled">
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
<div class="col-md-8 column">
    <div class="col-md-8 col-md-offset-1">
            <div class="span2"> </div>
            <form name="insert" action="simpan_dipho.php" method="POST">
                <h1>Detail Toko</h1>
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
                <label>Nama Toko</label>
                <input type="text" class="form-control" placeholder="Nama Toko">
                <label>Alamat Toko</label>
                <textarea class="form-control" rows="3"></textarea>
                <label>Layanan Toko</label>
               <textarea class="form-control" rows="3"></textarea>
                <label>Tahun Berdiri</label>
               <select class="form-control" name="tahun">
                   <option>2015</option>
                   <option>2014</option>
                   <option>2013</option>
                   <option>2012</option>
                   <option>2011</option>
                   <option>2009</option>
                   <option>2008</option>
                   <option>2007</option>
                   <option>2006</option>
                   <option>2005</option>
                   <option>2004</option>
                   <option>2003</option>
                   <option>2002</option>
                   <option>2001</option>
                   <option>2000</option>
                   </select>
                                <label>hari Buka</label>
                                <select class="form-control" name="hari_buka">
                                    <option>senin-jumat</option>
                                    <option>senin-sabtu</option>
                                    <option>senin-minggu</option>
                                </select>
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
                </select> sampai
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
                <label>Upload Gambar Toko</label>
                <input type="file" id="exampleInputFile" name="file">
                <button type="button" class="btn btn-primary">Submit</button>
            </form
            </div>
                    </div>
    </div>
            
        </div><!-- /.navbar -->
</div>


                    <?php
                    require_once 'footer.php';
                    ?>

