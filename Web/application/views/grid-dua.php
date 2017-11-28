<div class="grid-satu">
    <ul class="content" style="margin-top:20px; border-bottom:0.5px solid black">
        <li class="content"><a class="<?php if(isset($_GET['npm'])){ echo "n";} ?>active" href="./">Home</a></li>
    </ul>
</div>
<div class="grid-dua">
    <ul class="content">
        <?php foreach($person as $ps): ?>
            <li class="content"><a class="<?php if(!isset($_GET['npm']) or (isset($_GET['npm']) and $_GET['npm']!= $ps['npm'])){ echo "n";} ?>active" href="?npm=<?php echo $ps['npm'] ?>"><?php echo $ps['panggilan'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>