<?php

require_once '../connect.php';

$id = $_GET['id'];

$req = $db -> query("SELECT * FROM `shoes` INNER JOIN `brand` ON `shoes`.`brand` = `brand`.`id_brand` WHERE `shoes`.`id_shoes` = $id");
$post = $req->fetch(PDO::FETCH_ASSOC);


$cat = $db->query("SELECT `name_brand`, `id_brand` FROM `brand` ");
ob_start();
?>
<div id="formulaire">
    <form action="dbupdate.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_shoes" id="id_shoes" value="<?=$post['id_shoes']?>">
    
    <div class="row">
      <div class="col-25">
        <label for="shoesname">Shoes Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="shoesname" name="shoesname" value="<?=$post['name_shoes']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="retail">Retail price</label>
      </div>
      <div class="col-75">
        <input type="text" id="retail" name="retail" value="<?=$post['retail']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="resell">Resell price</label>
      </div>
      <div class="col-75">
        <input type="text" id="resell" name="resell" value="<?=$post['resell']?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="date_re">Date release</label>
      </div>
      <div class="col-75">
        <input type="date" id="date_re" name="date_re" value="<?=$post['date_relase']?>"  min="1900-01-01" max="2100-12-31">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="ds">Description</label>
      </div>
      <div class="col-75">
        <textarea id="ds" name="ds"  style="height:200px"><?=$post['description']?></textarea>

     </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="brand">Brand</label>
      </div>
      <div class="col-75">
        <select id="brand" name="brand">
            <option value="<?=$post['id_brand']?>"><?=$post['name_brand']?></option>
            <?php 
                 foreach ($cat as $bra){
                     if($bra['name_brand'] === $post['name_brand']){
                         echo 'error';
                     }else{?>
                        <option value="<?= $bra['id_brand'] ?> "><?=$bra['name_brand']?></option>
                     <?php }
                    } ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="img">Image</label>
      </div>
      <div class="col-75">
        <input type="file" name="img" id="img" />
      </div>
      <h3>Fichier Actuel:&nbsp &nbsp<?=$post['photo']?></h3>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="submit">
    </div>

    </form>
</div>


<?php
$content = ob_get_clean();

require '../css/templateAdmin.php';
?>