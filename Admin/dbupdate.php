<?php

require_once '../connect.php';


$id = $_POST['id_shoes'];
$req = $db->query("SELECT * FROM `shoes` WHERE `id_shoes` = $id");
$pre = $req->fetch(PDO::FETCH_ASSOC);


if(isset($_POST['submit'])){
    
    $name_shoes = $_POST['shoesname'];
    
    $retail = $_POST['retail'];
    $resell = $_POST['resell'];
    $date_relase = $_POST['date_re'];
    $ds = $_POST['ds'];
    $brand = $_POST['brand'];
    
    

    $path= './img/';
    $arrayType = ["jpg" => 'image/jpg', "jpeg" => 'image/jpeg', "png" => 'image/png'];
    
        $name  =  $path.basename($_FILES['img']['name']);
        if(in_array($_FILES['img']['type'], $arrayType)){
            move_uploaded_file($_FILES['img']['tmp_name'], $name);
            $edit = $db->prepare("UPDATE `shoes` SET `name_shoes` = :name_shoes, `retail` = :retail , `resell` = :resell , `date_relase` = :datere , `description` = :ds, `brand`= :brand, `photo` = :photo WHERE `id_shoes` = :id ");
        $ju = $edit->execute(['name_shoes' => $name_shoes, 'retail' => $retail, 'resell' => $resell, 'datere' => $date_relase, 'ds' => $ds, 'brand' => $brand,'photo' => $name, 'id' => $id]);
        }
        else{
        $edit = $db->prepare("UPDATE `shoes` SET `name_shoes` = :name_shoes, `retail` = :retail , `resell` = :resell , `date_relase` = :datere , `description` = :ds, `brand`= :brand WHERE `id_shoes` = :id ");
        $ju = $edit->execute(['name_shoes' => $name_shoes, 'retail' => $retail, 'resell' => $resell, 'datere' => $date_relase, 'ds' => $ds, 'brand' => $brand, 'id' => $id]);
    }

    header('Location: ArticlesAdmin.php');
}
