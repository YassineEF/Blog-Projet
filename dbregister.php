<?php
    session_start();
    require_once 'connect.php';

    $checkUser = $_POST['user'];
    $checkPwd = $_POST['pwd'];
    $checkPwdvf = $_POST['pwdvf'];
    $checkMail = $_POST['email'];


    $req = $db->query("SELECT * FROM `admin` WHERE `email` = '$checkMail'");


    if($checkPwd !== $checkPwdvf){
        echo '<body onLoad="alert(\'Passwords not matching\')">';
        echo '<meta http-equiv="refresh" content="0;URL=register.php">';
    }else{
        if(count($req->fetchAll()) == 0){
            if(!filter_var($checkMail, FILTER_VALIDATE_EMAIL)){
                echo '<body onLoad="alert(\'Incorrect syntaxe email\')">';
                echo '<meta http-equiv="refresh" content="0;URL=register.php">';
            }else{
                $hashpwd = password_hash($chekPwd, PASSWORD_BCRYPT);
                $reg = $db->query("INSERT INTO `admin`( `username`, `pwd`, `email`) VALUES ('$checkUser', '$hashpwd', '$checkMail')");
                header('Location:./Admin/AcceuilAdmin.php');
                echo '<body onLoad="alert(\'Account Recorded Successfully\')">';
            }
        }
        echo '<body onLoad="alert(\'Existing account\')">';
        echo '<meta http-equiv="refresh" content="0;URL=register.php">';
    }