<?php

require_once 'connect.php';

$id = $_GET['brand'];

 
$req = $db->query("SELECT * FROM `shoes` INNER JOIN `brand` ON `shoes`.`brand` = `brand`.`id_brand` WHERE `brand`.`name_brand` = '$id'  ORDER BY `shoes`.`id_shoes` DESC ");

$categories = $req->fetchAll(PDO::FETCH_ASSOC);

ob_start();
?>
<div id="center">
<h1>Brand: <?= $id?> </h1>
<?php foreach($categories as $br){
    $newDate = date("d-m-Y", strtotime($br['date_relase']));?>
    <section class="imageSn">
        <img src ="<?=  $br['photo']; ?>" alt="Sneakers shoes">
        <article id="textSn">
            <h2><?= $br['name_shoes']; ?></h2>
            <h3>Retail Price: <?= $br['retail']?></h3><h3>Resell Price: <?= $br['resell']?></h3>
            <h4>Relase Date: <?= $newDate?></h4>
            <p><?= $br['description']?></p>
            <a href="Categories.php?brand=<?=$br['name_brand']?>"><?= $br['name_brand']?></a>
        </article>
    </section>
<?php } ?>
</div>
<?php

$content = ob_get_clean();

require './css/template.php';

?>