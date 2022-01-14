<?php 

require_once 'connect.php';

$req = $db->query("SELECT `shoes`.`name_shoes`,`shoes`.`retail`,`shoes`.`resell`,`shoes`.`date_relase`,`shoes`.`description`,`shoes`.`photo`,`brand`.`name_brand` FROM `shoes` INNER JOIN `brand` ON `shoes`.`brand` = `brand`.`id_brand` ORDER BY `shoes`.`id_shoes` DESC ");


ob_start();
?>
<div id="center">
<h1>Sneakers Section</h1>
<?php foreach($req as $sn){
    $newDate = date("d-m-Y", strtotime($sn['date_relase']));?>
    <section class="imageSn">
        <img src ="<?= $sn['photo']; ?>" alt="Sneakers shoes">
        <article id="textSn">
            <h2><?= $sn['name_shoes']; ?></h2>
            <h3>Retail Price: <?= $sn['retail']?></h3><h3>Resell Price: <?= $sn['resell']?></h3>
            <h4>Relase Date: <?= $newDate?></h4>
            <p><?= $sn['description']?></p>
            <a href="Categories.php?brand=<?= $sn['name_brand']?>"><?= $sn['name_brand']?></a>
        </article>
    </section>
<?php } ?>
</div>
<?php

$content = ob_get_clean();

require './css/template.php';

?>