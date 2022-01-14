<?php 
    session_start();
    require_once 'connect.php';

    $tryuser = $_POST['user'];
    $trypwd = $_POST['pwd'];
    $trymail = $_POST['email'];

    $req = $db->query("SELECT * FROM `admin` WHERE `email` = '$trymail'");
    $post = $req->fetch(PDO::FETCH_ASSOC);

    if($tryuser === $post['username']){
        if(password_verify($trypwd, $post['pwd'])){

            $_SESSION['user'] = $tryuser;
            $_SESSION['pwd'] = $trypwd;
            $_SESSION['email'] = $trymail;
            header('Location:./Admin/AcceuilAdmin.php');
        }else{
            echo '<body onLoad="alert(\'Something Wrong\')">';
            echo '<meta http-equiv="refresh" content="0;URL=login.php">';
        }
    }else{
        echo '<body onLoad="alert(\'Something Wrong\')">';
        echo '<meta http-equiv="refresh" content="0;URL=login.php">';
    }