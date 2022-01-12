<?php 
    require_once 'connect.php';
    $req = $db -> query('SELECT * FROM `shoes` ORDER BY `id_shoes` DESC LIMIT 10', PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="9CBBA8">
    <!-- Title page -->
    <title>YassoShoes</title>
    <!-- Logo Site -->
    <link rel="shortcut icon" href="./img/LogoBlack.png" type="image/x-icon">
    <!-- CSS link -->
    <link rel="stylesheet"  href="./css/style.css">
    <!-- 1 Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <!-- 2 Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <!-- <header>
        <section id="topLeft">
            <img src="./img/LogoWhite.png" alt="Logo Header">
        </section>
        <section id="topCenter">
            <ul id ="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shoes</a></li>
                <li id="submenu"><a href="#" >Brand</a>
                    <ul>
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Jordan</a></li>
                        <li><a href="#">Adidas</a></li>
                    </ul>
                </li>
                <li><a href="#">Contacts</a></li> -->
            <!-- </ul>
            
        </section>
        <section id="topRight">
            <div class="navbar" onclick="myFunction(this)">
            <div class="navbar" > 
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <a href="#">Login</a>
        </section>
    </header> -->
    <header>
   <div id="logo"></div>
    <div class="topnav" id="myTopnav">
        <img src="./img/logoWhite.png" alt="Logo Header">
        <a href="#news">Home</a>
        <a href="#contact">Sneakers</a>
        <div class="dropdown">
            <button class="dropbtn">Brand
                <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-content">
            <a href="#">Jordan</a>
            <a href="#">Nike</a>
            <a href="#">Adidas</a>
        </div>
    </div> 
        <a href="#about">Login</a>
        <div class="navbar" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
    </div>
    
    </header>
    <!-- CONTENT SITE -->
    <main>
        <div class="CaroselImg">
            <img src="./img/J1CP" alt="Image Jordan" class="image1">
            <img src="./img/OffWhite" alt="Image OffWhite" class="image">
            <img src="./img/J1PG" alt="Image Jordan" class="image">
            <img src="./img/Yeezy" alt="Image Adidas" class="image">
        </div>
        <div id="center">
            <div id="leftside">
             <h2>Not the sneakers blog you need but the sneakers blog you deserve</h2>
             <p>This is not the same sneakers blog, this is a special blog created by a sneakers fan to sneakers fans. Here you can find the last snekers released by three different brand: NIKE, JORDAN and ADIDAS. YOu can find in the sneakers section all the sneakers released(that we stocked in our database), with a little description, a resell  and retail price and a release date.<br><h3>(Fly on the image to find out the name of the sneakers)</h3></p>
            </div>
            <div id="rightside">
                <?php foreach($req as $sn){ ?>
                    
                    <a href="#"><figure class="imgsn">
                        <img src ="<?= $sn['photo']; ?>" alt="Sneakers shoes">
                        <figcaption><?= $sn['name_shoes']; ?></figcaption>
                    </figure></a>
                   
                <?php } ?>
            </div>
        </div>
    </main>
    <!-- FOOTER -->
    <footer>
        <div id="footUp">
            <a href="#"><img src="./img/Email.png" alt="Email logo & link" class="logoCont"></a>
            <a href="#"><img src="./img/fb.png" alt="Facebook logo & link" class="logoCont"></a>
            <a href="#"><img src="./img/ig.png" alt="Instagram logo & link" class="logoCont"></a>
        </div>
        <div id="footDown">
            <aside id="footLeft">
                <a href="#"><img src="./img/LogoBlack.png" alt="Logo Footer"></a>
            </aside>
            <aside id="footCenter">
                <h4>Not the sneakers blog you need but the sneakers blog you deserve</h4>
            </aside>
            <aside id="footRight">
                <ul>
                    <li><a href="#">Back to the Menu</a></li>
                    <li><a href="#">Who am I?</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </aside>
        </div>
    </footer>
    <script src="./Js/script.js"></script>
</body>
</html>