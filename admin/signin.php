<?php
require_once '\header.php';
?>
<div class="container">
    <div class="row-fluid">
        <div class="span4"> </div>
<form class="form-horizontal">
    <div class="form-group">
        <h2 class="form-signin-heading"><center>Login</center></h2>
        <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="forgetpassword">
            <label>
            <a href="#">Forget Password?</a>
            </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button href="index.php" type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>
</div>
</div>
