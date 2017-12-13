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
                <?php if(isset($_SESSION['npm'])) { ?>
                <li class="topnav"><a href="?stats=logout">log-out</a></li>
                <div class="topnav-divider"></div>
                <li class="topnav">
                    <!-- <a class="hyperblock" id="non-left" href="index?npm=0"><div id="admin"><img src="<?php /*echo base_url();?>icon/biodatalisticon.png" class="<?php if(isset($_GET['npm'])){ echo "active";}*/ ?>" height="40px" width="40px" margin="auto"> </div></a> -->
                    <p id="welcome"><span style="color:#ffcc00">● </span>Welcome, </p><a id="welcome" href><?php echo $this->session->userdata('nama'); ?></a>
                </li>
                <?php } else { ?>
                <li class="topnav"><a href="login?login=newuser" <?php if(isset($_GET['login']) and ($_GET['login'] == 'newuser')){ echo "class=\"active\"";} ?>>Register</a></li>
                <div class="topnav-divider"></div>
                <li class="topnav"><a href="login" <?php if(!isset($_GET['login'])){ echo "class=\"active\"";} ?>>Login</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="grid-leftnav">
            <a class="hyperblock" href="index"><div><img src="<?php echo base_url();?>icon/homeicon.png" height="50px" width="50px" margin="auto"> </div></a>
            <a class="hyperblock" href="index?npm=0"><div><img src="<?php echo base_url();?>icon/biodatalisticon.png"  height="50px" width="50px" margin="auto"> </div></a>
        </div>
        <div class="grid-empat">
            <div class="content">
                <div class="main">
                    <!-- register -->
                    <?php if(isset($_GET["login"]) and $_GET["login"]=="newuser") {?>
                        
                    <?php 
                        $array_items = array('npm', 'nama');
                        $this->session->unset_userdata($array_items); 
                    ?>
                        <h1 class="login-h1">REGISTER</h1>
                    <form class="main" method="post" action="">
                        NPM<br>
                        <input class="data" type="text" name="npmsu" placeholder="NPM">
                        Username<br>
                        <input class="data" type="text" name="namesu" placeholder="Nama Akun">
                        Password<br>
                        <input class="data" type="password" name="passsu" placeholder="Password">
                        Verify Password<br>
                        <input class="data" type="password" name="repasssu" placeholder="Ulangi Password">

                        <?php if(isset($_GET["fail"]) and ($_GET["fail"]=="1" or $_GET["fail"]=="4" or $_GET["fail"]=="5" or $_GET["fail"]=="7")) {?>
                            <p id="warning-login">NPM telah digunakan!<p>
                            <div class="warning-login" id="regist"></div>
                        <?php } ?>
                        <?php if(isset($_GET["fail"]) and ($_GET["fail"]=="2" or $_GET["fail"]=="4" or $_GET["fail"]=="6" or $_GET["fail"]=="7")) {?>
                            <p id="warning-login">Nama akun sudah ada!<p>
                            <div class="warning-login" id="regist"></div>
                        <?php } ?>
                        <?php if(isset($_GET["fail"]) and ($_GET["fail"]=="3" or $_GET["fail"]=="5" or $_GET["fail"]=="6" or $_GET["fail"]=="7")) {?>
                            <p id="warning-login">Password tidak cocok!<p>
                            <div class="warning-login" id="regist"></div>
                        <?php } ?>

                        <table class="login-helper">
                            <tr>
                                <td><input class="logi" type="submit" value="REGISTER"/></td>
                                <td class="table-divider"><div class="table-divider"></div></td>
                                <td>
                                    <p style="margin:4px 0">Sudah punya akun?</p>
                                    <ul class="login-res">
                                        <li class="login-res"><a href="login">LOGIN</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    if(isset($_POST['namesu']) and !empty($_POST['namesu'])) {
                        $err1 = 0;
                        $err2 = 0;
                        $err3 = 0;
                        $it = 0;
                        $len = count($user);
                        foreach($user as $us): 
                            // cek npm dan nama
                            if($us['npm'] == $_POST['npmsu']) { 
                                $err1 = 1;
                            } 
                            if ($us['nama'] == $_POST['namesu']) {
                                $err2 = 1;
                            } 
                            if ($_POST['passsu'] != $_POST['repasssu']) {
                                $err3 = 1;
                            }
                            $it++;
                        endforeach;

                        if ($err1 == 0 and $err2 == 0 and $err3 == 0) {
                            $servername = "localhost";
                            $username = "root";
                            $password = "meramera";
                            $dbname = "pw";
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 

                            $npm = $_POST['npmsu'];
                            $nama = $_POST['namesu'];
                            $pass = $_POST['passsu'];
                            $sql = "INSERT INTO user (npm, nama, pass) VALUES ('".$npm."', '".$nama."', '".$pass."')";
                            
                            if($conn->query($sql) === TRUE){
                                header("Location: ?login=registsucc");
                            } else {
                                header("Location: ?login=fail");
                            }
                            $this->session->set_userdata('nama', $_POST['namesu']);
                            $this->session->set_userdata('npm', $_POST['npmsu']);
                        } else {
                            header("Location: ?login=newuser");
                            if ($err1 == 1) { 
                                if ($err2 == 1) {
                                    if ($err3 == 1) {header("Location: ?login=newuser&fail=7");}
                                    else {header("Location: ?login=newuser&fail=4");}
                                } 
                                else if ($err3 == 1) {header("Location: ?login=newuser&fail=5");}
                                else {header("Location: ?login=newuser&fail=1");}
                            }
                            else if ($err2 == 1) { 
                                if ($err3 == 1) {header("Location: ?login=newuser&fail=6");}
                                    else {header("Location: ?login=newuser&fail=2");}
                                
                            }
                            else if ($err3 == 1) { header("Location: ?login=newuser&fail=3");}
                        }
                    } ?>
                    
                    <!-- login success -->
                    <?php } elseif(isset($_GET["login"]) and $_GET["login"]=="loginsucc") {?>
                        <p>Anda berhasil Login! Selamat datang <?php echo $this->session->userdata('nama'); ?></p>
                        <ul class="login-res">
                            <li class="login-res"><a href="index" style="margin-top:20px;">KE MENU UTAMA</a></li>
                            <?php header( "refresh:5;url=index" );  ?>
                        </ul>
                    <!-- register success -->
                        <?php } elseif (isset($_GET["login"]) and $_GET["login"]=="registsucc") {?>
                        <p>Anda berhasil register! <?php echo $this->session->userdata('nama'); ?></p>
                        <ul class="login-res">
                            <li class="login-res"><a href="index" style="margin-top:20px;">KE MENU UTAMA</a></li>
                            <?php header( "refresh:5;url=index" );  ?>
                        </ul>
                    <!-- page fail -->
                        <?php } elseif (isset($_GET["login"]) and $_GET["login"]=="fail") {?>
                        <p>Lah, Error! <br/> Maap ya :(</p>
                        <ul class="login-res">
                            <li class="login-res"><a href="index" style="margin-top:20px;">KE MENU UTAMA</a></li>
                        </ul>
                    <!-- login -->
                    <?php } else { ?>
                        <?php 
                        $array_items = array('npm', 'nama');
                        $this->session->unset_userdata($array_items); 
                    ?>
                        <h1 class="login-h1">LOGIN</h1>
                    <form class="main" method="POST" action="">
                        Username<br>
                        <input class="data" type="text" name="nameli" placeholder="Nama Akun / NPM">
                        Password<br>
                        <input class="data" type="password" name="passli" placeholder="Password">
                        <?php if(isset($_GET["login"]) and $_GET["login"]=="loginfail") {?>
                            <p id="warning-login">Nama akun atau Password salah!<p>
                            <div id="warning-login" id="login"></div>
                        <?php } ?>
                        <table class="login-helper">
                            <tr>
                                <td><input class="logi" type="submit" value="LOGIN"/></td>
                                <td class="table-divider"><div class="table-divider"></div></td>
                                <td>
                                    <p style="margin:4px 0">Belum punya akun?</p>
                                    <ul class="login-res">
                                        <li class="login-res"><a href="?login=newuser">REGISTER</a></li>
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
                                    $this->session->set_userdata('nama', $us['nama']);
                                    $this->session->set_userdata('npm', $us['npm']);
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