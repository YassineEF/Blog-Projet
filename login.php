<?php
    require_once 'connect.php';
    
    ob_start();
?>
<h1 id="log">LOGIN</h1>
<div id="regBtn"><a href="register.php"> Register you now</a></div>
<div id="formulaire">
    <form action="dblogin.php" method="post">
        <input type="hidden" name="id_shoes" id="id_shoes">
    
    <div class="row">
      <div class="col-25">
        <label for="user">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="user" name="user" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="pwd">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pwd" name="pwd" >
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" >
      </div>
    </div>

    <div class="row">
      <input type="submit" name="submit" value="submit">
    </div>
</div>

<?php
    $content = ob_get_clean();
    
    require 'css/template.php'
    

?>