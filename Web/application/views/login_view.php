<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/refresh.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css" />
</head>
<body>
    <div class="grid-container">
        <div class="grid-topnav">
            <ul class="login">
                <li class="top"><p class="welcome">Login</p></li>
            </ul>
        </div>
        <div class="grid-empat">
            <div class="content">
                <div class="main">
                    <?php if(isset($_GET["login"]) and $_GET["login"]=="newuser") {?>
                    <form class="main" action="\#">
                        Username<br>
                        <input class="data" type="text" name="name" placeholder="Nama / NPM">
                        <br>
                        Password<br>
                        <input class="data" type="password" name="pass" placeholder="Password">
                        <br>
                        Verify Password<br>
                        <input class="data" type="password" name="pass" placeholder="Re-enter Password">
                    </form>
                    <ul class="login">
                        <li class="log"><a style="border-right-color:orangered" href=".">REGISTER</a></li>
                    </ul>
                    <p style="margin:10px 0">Sudah punya akun?</p>
                    <ul class="login">
                        <li class="log"><a style="border-right-color:green" href="login">LOGIN</a></li>
                    </ul>
                    <?php } else { ?>
                    <form class="main" action="\#">
                        Username<br>
                        <input class="data" type="text" name="name" placeholder="Nama / NPM">
                        <br>
                        Password<br>
                        <input class="data" type="password" name="pass" placeholder="Password">
                    </form>
                    <ul class="login">
                        <li class="log"><a style="border-right-color:green" href="#">LOGIN</a></li>
                    </ul>
                    <p style="margin:10px 0">Belum punya akun?</p>
                    <ul class="login">
                        <li class="log"><a style="border-right-color:orangered" href="?login=newuser">REGISTER</a></li>
                    </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>