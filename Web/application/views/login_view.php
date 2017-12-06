<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/refresh.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/frontpage-font.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/personlist-font.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/user-log-bottombar.css" />
</head>
<body>
    <div class="grid-container">
        <div class="grid-topnav">
            <ul class="login">
                <?php if(isset($_SESSION['some_name'])) { ?>
                <li class="topnav"><a href="?stats=logout">log-out</a></li>
                <li class="topnav"><p class="welcome">Welcome, <?php $name = $_SESSION['name']; ?></p></li>
                <?php } else { ?>
                <li class="topnav"><a href="login?login=newuser">Register</a></li>
                <div class="topnav-divider"></div>
                <li class="topnav"><a href="login">Login</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="grid-leftnav">
            <a class="hyperblock" href="index"><div class="<?php if(!isset($_GET['npm'])){ echo "active";} ?>"></div></a>
            <a class="hyperblock" href="index?npm=0"><div class="<?php if(isset($_GET['npm'])){ echo "active";} ?>"></div></a>
        </div>
        <div class="grid-empat">
            <div class="content">
                <div class="main">
                    <!-- register -->
                    <?php if(isset($_GET["login"]) and $_GET["login"]=="newuser") {?>
                        <h1 class="login-h1">REGISTER</h1>
                    <form class="main" action="\#">
                        NPM<br>
                        <input class="data" type="text" name="npmsu" placeholder="Nama / NPM">
                        Username<br>
                        <input class="data" type="text" name="namesu" placeholder="Nama / NPM">
                        Password<br>
                        <input class="data" type="password" name="passsu" placeholder="Password">
                        Verify Password<br>
                        <input class="data" type="password" name="repasssu" placeholder="Re-enter Password">
                        <table class="login-helper">
                            <tr>
                                <td><input class="logi" type="submit" value="REGISTER"/></td>
                                <td>
                                    <p style="margin:4px 0">Sudah punya akun?</p>
                                    <ul class="login-res">
                                        <li class="login-res"><a style="border-right-color:green" href="login">LOGIN</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        
                    </form>
                    
                    <!-- login success -->
                    <?php } elseif(isset($_GET["login"]) and $_GET["login"]=="loginsucc") {?>
                        <p>Anda berhasil Login!</p>
                        <ul class="login">
                            <li class="log"><a style="border-right-color:blue;margin-top:20px;" href="index">Menu Utama</a></li>
                        </ul>
                    <!-- login -->
                    <?php } else { ?>
                        <h1 class="login-h1">LOGIN</h1>
                    <form class="main" method="POST" action="">
                        Username<br>
                        <input class="data" type="text" name="nameli" placeholder="Nama / NPM">
                        Password<br>
                        <input class="data" type="password" name="passli" placeholder="Password">
                        <?php
                        if(isset($_GET["login"]) and $_GET["login"]=="loginfail") {?>
                            <p>nama atau password salah!<p>
                        <?php } ?>
                        <table class="login-helper">
                            <tr>
                                <td><input class="logi" type="submit" value="LOGIN"/></td>
                                <td>
                                    <p style="margin:4px 0">Belum punya akun?</p>
                                    <ul class="login-res">
                                        <li class="login-res"><a style="border-right-color:orangered" href="?login=newuser">REGISTER</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        
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
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>