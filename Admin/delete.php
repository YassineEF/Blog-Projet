<?php 
        require_once '../connect.php';

        $id = $_GET['id'];
        
        $req = $db->query("SELECT * FROM `shoes` WHERE `id_shoes`= $id");

        if(isset($_GET['id'])){
            $delete = $db->query("DELETE FROM `shoes` WHERE `id_shoes` = $id");
            // echo "Element elimineted successfully";
            header('Location: ArticlesAdmin.php');
            
        }else{
            echo "Error";
        }