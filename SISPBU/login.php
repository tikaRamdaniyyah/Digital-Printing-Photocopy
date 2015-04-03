<?php
require_once 'header.php';
?>
<div class="container">

    <div class="masthead">
        <h3 class="muted"></h3>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active"><a href="#">Beranda</a></li>
                        <li><a href="#">Pencarian</a></li>
                        <li><a href="#">Posting</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.navbar -->
        <div class="container">
            <div class="row-fluid">
                <div class="span4"> </div>
                <div class="span4">
                    <form class="form-signin" name="login" action="cek_login.php" method="POST">
                        <h2 class="form-signin-heading"><center>Login Administrator</center></h2>
                        <label class="control-label" for="inputEmail">Email</label>
                        <input class="input-block-level" placeholder="Username" type="text" name="id">
                        <input class="input-block-level" placeholder="Password" type="password" name="password">
                        <label class="checkbox">
                            <input value="remember-me" type="checkbox"> Remember me
                        </label>
                        <button type="submit" class="btn" name="submit">Sign in</button>
                    </form>
                </div>

                <div class="span4"> </div>
            </div>
        </div>

        <hr>

        <footer>
            <p><center>&copy; KPPL-D @2015<center></p>
                    </footer>

                    </div> <!-- /container -->
                    <?php
                    require_once 'footer.php';
                    ?>