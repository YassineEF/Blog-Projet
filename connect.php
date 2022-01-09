<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=projetblog;charset=utf8','root');
}catch(Exception $e){
    echo "Erreur : ". $e -> getMessage();
}