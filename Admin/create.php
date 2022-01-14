<?php

require_once '../connect.php';


$req = $db -> query("SELECT * FROM `shoes` INNER JOIN `brand` ON `shoes`.`brand` = `brand`.`id_brand` ");
$post = $req->fetch(PDO::FETCH_ASSOC);


$cat = $db->query("SELECT `name_brand`, `id_brand` FROM `brand` ");
ob_start();
?>
<div id="formulaire">
    <form action="dbcreate.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_shoes" id="id_shoes">
    
    <div class="row">
      <div class="col-25">
        <label for="shoesname">Shoes Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="shoesname" name="shoesname" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="retail">Retail price</label>
      </div>
      <div class="col-75">
        <input type="text" id="retail" name="retail" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="resell">Resell price</label>
      </div>
      <div class="col-75">
        <input type="text" id="resell" name="resell" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="date_re">Date release</label>
      </div>
      <div class="col-75">
        <input type="date" id="date_re" name="date_re"   min="1900-01-01" max="2100-12-31">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="ds">Description</label>
      </div>
      <div class="col-75">
        <textarea id="ds" name="ds"  style="height:200px"></textarea>

     </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="brand">Brand</label>
      </div>
      <div class="col-75">
        <select id="brand" name="brand">
            <?php 
                 foreach ($cat as $bra){?>
                        <option value="<?= $bra['id_brand'] ?> "><?=$bra['name_brand']?></option>
                  <?php  } ?>
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