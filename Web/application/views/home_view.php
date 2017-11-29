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
                <li class="topnav"><p class="welcome">Welcome, <?php $name = $_SESSION['name']; ?></p></li>
                <li class="topnav"><a href="?stats=logout">log-out</a></li>
                <?php } else { ?>
                <li class="topnav"><a href="login">log-in</a></li>
                <?php } ?>
                <!-- <li class="topnav"><p class="welcome">Welcome, Stacy</p></li> -->
            </ul>
        </div>
        <?php include 'grid-dua.php';?>

		<?php
			if(isset($_GET["npm"])){
            $id = $_GET["npm"];
            foreach($person as $ps):
			if($ps["npm"]==$id){
        ?>

        <div class="grid-tiga">
            <h1 id="title" style="margin:30px 0">Biodata <?php echo $ps["panggilan"];?></h1>
            <h2 class="person">Nama Lengkap :</h2>
             <p class="person"><?php echo $ps["nama"];?></p>
            <h2 class="person">Nama Panggilan :</h2>
             <p class="person"><?php echo $ps["panggilan"];?></p>
            <h2 class="person">NPM :</h2>
             <p class="person"><?php echo $ps["npm"];?></p>
            <h2 class="person">Tempat Tanggal Lahir :</h2>
             <p class="person"><?php echo $ps["tempatlahir"], ", ", $ps["tanggallahir"];?></p>
            <h2 class="person">Hobby</h2>
             <p class="person"><?php echo $ps["hobi"];?></p>
            <h2 class="person">Makanan Favorit</h2>
             <p class="person"><?php echo $ps["makananfav"];?></p>
            <h2 class="person">Benda Favorit</h2>
             <p class="person"><?php echo $ps["bendafav"];?></p>
            <h2 class="person">Warna Favorit</h2>
             <p class="person"><?php echo $ps["warnafav"];?></p>
            <h2 class="person">Genre Musik / Musik Favorit</h2>
             <p class="person"><?php echo $ps["musikfav"];?></p>
            <h2 class="person">Film Favorit</h2>
             <p class="person"><?php echo $ps["filmfav"];?></p>
            <h2 class="person">Game Favorit</h2>
             <p class="person"><?php echo $ps["gamefav"];?></p>
            <h2 class="person">Buku Favorit</h2>
             <p class="person"><?php echo $ps["bukufav"];?></p>
            <h2 class="person">Prestasi</h2>
             <p class="person" style="margin-bottom:30px"><?php echo $ps["prestasi"];?></p>
        </div>

        <?php 
            break;
            } elseif ($ps["npm"]!=$id) {
        ?>
            <div class="grid-tiga">
                <h1 style="margin:40px 0">Lah?</h1>
                <p>Sepertinya NPM <?php echo $_GET["npm"]; ?> belum didaftarkan.</p>
                <p>Maaf ya :(</p>
            </div>
        <?php
            } endforeach; 
            } else { 
        ?>
            <div class="grid-tiga">
                <h1 style="margin:40px 0">Biodata Kelas B TI 2016</h1>
                <p>Di dalam web ini terdapat daftar biodata anak - anak kelas B TI 2016 UNPAD.</p>
                <p>~~ Selamat Membaca ~~</p>
            </div>
		<?php } ?>
        
    </div>
</body>
</html>