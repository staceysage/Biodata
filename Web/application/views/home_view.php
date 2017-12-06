<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Biodata TI</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/refresh.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid.css" />
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
                <!-- <li class="topnav"><p class="welcome">Welcome, Stacy</p></li> -->
            </ul>
        </div>
        <div class="grid-leftnav">
            <a class="hyperblock" href="index"><div class="<?php if(!isset($_GET['npm'])){ echo "active";} ?>"><img src="<?php echo base_url();?>icon/homeicon.png" height="50px" width="50px" margin="auto"> </div></a>
            <a class="hyperblock" href="index?npm=0"><div class="<?php if(isset($_GET['npm'])){ echo "active";} ?>"><img src="<?php echo base_url();?>icon/biodatalisticon.png" height="50px" width="50px" margin="auto"> </div></a>
        </div>

        <?php 
			if(isset($_GET["npm"])){
            $id = $_GET["npm"];
            include 'grid-dua.php';
            if ($_GET["npm"]=="0") {
                ?>
                    <div class="grid-tiga">
                        <h1 style="margin:40px 0 10px">Hai XD</h1>
                        <div class="sep-div"></div>
                        <p>Silahkan klik menu list di kiri untuk mendapatkan info anak TI</p>
                        <p>Terima kasih</p>
                    </div>
                <?php
            } else {
            foreach($person as $ps):
            if($ps["npm"]==$id){
        ?>

        <div class="grid-tiga">
            <table class="table-person-content">
                <tr>
                    <td style="background-color:#f3f3f3">
                        <p class="person" id="head">Biodata</h1>
                    </td>
                    <td></td>
                </tr>
                <!-- isi -->
                <tr>
                    <td><p class="person">Nama Lengkap</h2></td>
                    <td><p class="person"><?php echo $ps["nama"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Nama Panggilan</h2></td>
                    <td><p class="person"><?php echo $ps["panggilan"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">NPM</h2></td>
                    <td><p class="person"><?php echo $ps["npm"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Tempat Tanggal Lahir</h2></td>
                    <td><p class="person"><?php echo $ps["tempatlahir"], ", ", $ps["tanggallahir"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Hobby</h2></td>
                    <td><p class="person"><?php echo $ps["hobi"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Makanan Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["makananfav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Benda Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["bendafav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Warna Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["warnafav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Genre Musik / Musik Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["musikfav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Film Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["filmfav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Game Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["gamefav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Buku Favorit</h2></td>
                    <td><p class="person"><?php echo $ps["bukufav"];?></p></td>
                </tr>
                <tr>
                    <td><p class="person">Prestasi</h2></td>
                    <td><p class="person"><?php echo $ps["prestasi"];?></p></td>
                </tr>
            </table>
        </div>

        <?php 
            break;
            } elseif ($ps["npm"]!=$id and $ps["npm"]!="0") {
        ?>
            <div class="grid-tiga">
                <h1 style="margin:40px 0 10px">Lah?</h1>
                <div class="sep-div"></div>
                <p>Sepertinya NPM <?php echo $_GET["npm"]; ?> belum didaftarkan.</p>
                <p>Maaf ya :(</p>
            </div>
        <?php
            } endforeach; 
            } } else { 
        ?>
            <div class="grid-tiga" style="transform: translateX(-120px); text-align: center; padding-top: 40px;">
            <img src="<?php echo base_url();?>icon/webicon.png" alt="Smiley face" height="200px" width="200px" margin="auto"> 
                <h1 style="margin:40px 0 10px ">Biodata Kelas B TI 2016</h1>
                        <div class="sep-div"></div>
                <p>Di dalam web ini terdapat daftar biodata anak - anak kelas B TI 2016 UNPAD.</p>
                <p>~~ Selamat Membaca ~~</p>
            </div>
        <?php } ?>
    </div>
</body>
</html>