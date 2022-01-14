<?php

require_once '../connect.php';


// $req = $db->query("SELECT * FROM `shoes` WHERE  1");
// $pre = $req->fetch(PDO::FETCH_ASSOC);

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

    if(empty($name_shoes) || empty($retail) || empty($resell) || empty($date_relase) || empty($ds) || empty($brand) || empty($name)){
        header('Location: ArticlesAdmin.php');
        echo "Insert all the table please";
    }else{
        if(in_array($_FILES['img']['type'], $arrayType)){
            move_uploaded_file($_FILES['img']['tmp_name'], $name);
    
            $edit = $db->prepare("INSERT INTO `shoes` (`name_shoes`, `retail`, `resell`, `date_relase`, `description`, `brand`, `photo`) VALUES ( :name_shoes, :retail , :resell , :datere , :ds, :brand, :photo)");
            $ju = $edit->execute(['name_shoes' => $name_shoes, 'retail' => $retail, 'resell' => $resell, 'datere' => $date_relase, 'ds' => $ds, 'brand' => $brand,'photo' => $name ]);
        }else{
            echo "Error Mate";
        }
        header('Location: ArticlesAdmin.php');
    }
}
