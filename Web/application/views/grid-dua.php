<div class="grid-satu">
    <ul class="content" style="border-bottom:0.5px solid #aeaeae">
        <li class="content">
            <!-- <a class="<?php //if(isset($_GET['npm'])){ echo "n";} ?>active" href="./"><p>Home</p></a> -->
            <a id="no-hover"><p>Biodata List</p><a>
        </li>
    </ul>
</div>
<div class="grid-dua">
    <ul class="content">
        <?php foreach($person as $ps): ?>
            <li class="content"><a class="<?php if(!isset($_GET['npm']) or (isset($_GET['npm']) and $_GET['npm']!= $ps['npm'])){ echo "n";} ?>active" href="?npm=<?php echo $ps['npm'] ?>"><p><?php echo $ps['panggilan'] ?><p></a></li>
        <?php endforeach; ?>
    </ul>
</div>