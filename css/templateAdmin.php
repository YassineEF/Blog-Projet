<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../css/styleTemp.css">
    <!-- Title page -->
    <title>YassoShoes</title>
    <!-- Logo Site -->
    <link rel="shortcut icon" href="../img/LogoBlack.png" type="image/x-icon">
    <!--  Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <header>
   <div id="logo"></div>
    <div class="topnav" id="myTopnav">
        <img src="../img/logoWhite.png" alt="Logo Header">
        <a href="AcceuilAdmin.php?">Home</a>
        <a href="ArticlesAdmin.php">Sneakers</a>
        <div class="dropdown">
            <button class="dropbtn">Brand
                <i class="fa fa-caret-down"></i>
            </button>
        <div class="dropdown-content">
            <a href="CategoriesAdmin.php?brand=Jordan">Jordan</a>
            <a href="CategoriesAdmin.php?brand=Nike">Nike</a>
            <a href="CategoriesAdmin.php?brand=Adidas">Adidas</a>
        </div>
    </div> 
        <a href="../logout.php">Logout</a>
        <div class="navbar" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
    </div>
    
    </header>
    <section>
        <?= $content ?>
        
    </section>
    <footer>
        <div id="footUp">
            <a href="#"><img src="../img/Email.png" alt="Email logo & link" class="logoCont"></a>
            <a href="#"><img src="../img/fb.png" alt="Facebook logo & link" class="logoCont"></a>
            <a href="#"><img src="../img/ig.png" alt="Instagram logo & link" class="logoCont"></a>
        </div>
        <div id="footDown">
            <aside id="footLeft">
                <a href="AcceuilAdmin.php?"><img src="../img/LogoBlack.png" alt="Logo Footer"></a>
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
    <script src="../Js/script.js"></script>
</body>
</html>