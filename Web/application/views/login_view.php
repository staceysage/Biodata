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
                    <!-- register -->
                    <?php if(isset($_GET["login"]) and $_GET["login"]=="newuser") {?>
                    <form class="main" action="\#">
                        NPM<br>
                        <input class="data" type="text" name="npmsu" placeholder="Nama / NPM">
                        <br>
                        Username<br>
                        <input class="data" type="text" name="namesu" placeholder="Nama / NPM">
                        <br>
                        Password<br>
                        <input class="data" type="password" name="passsu" placeholder="Password">
                        <br>
                        Verify Password<br>
                        <input class="data" type="password" name="repasssu" placeholder="Re-enter Password">
                        <input class="logr" type="submit" value="register"/>
                    </form>
                    <p style="margin:10px 0">Sudah punya akun?</p>
                    <ul class="login">
                        <li class="log"><a style="border-right-color:green" href="login">LOGIN</a></li>
                    </ul>
                    
                    <!-- login success -->
                    <?php } elseif(isset($_GET["login"]) and $_GET["login"]=="loginsucc") {?>
                        <p>Anda berhasil Login!</p>
                        <ul class="login">
                            <li class="log"><a style="border-right-color:blue;margin-top:20px;" href="index">Menu Utama</a></li>
                        </ul>
                    <!-- login -->
                    <?php } else { ?>
                    <form class="main" method="POST" action="">
                        Username<br>
                        <input class="data" type="text" name="nameli" placeholder="Nama / NPM">
                        <br>
                        Password<br>
                        <input class="data" type="password" name="passli" placeholder="Password">
                        <?php
                        if(isset($_GET["login"]) and $_GET["login"]=="loginfail") {?>
                            <p>nama atau password salah!<p>
                        <?php } ?>
                        <input class="logi" type="submit" value="login"/>
                    </form>
                    <?php
                    if(isset($_POST['nameli']) and !empty($_POST['nameli'])) {
                        $it = 0;
                        $len = count($user);
                        foreach($user as $us): 
                            if(($us['npm'] == $_POST['nameli']) or ($us['nama'] == $_POST['nameli'])) {
                                if($us['pass'] == $_POST['passli']){
                                    header("Location: ?login=loginsucc");
                                    break;
                                }
                                else if ($it == $len - 1) {
                                    header("Location: ?login=loginfail");
                                }
                            } else if ($it == $len - 1) {
                                header("Location: ?login=loginfail");
                            }
                            $it++;
                        endforeach;
                    } ?>
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