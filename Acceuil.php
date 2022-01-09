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
    <title>YassoShoes</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <section id="topLeft">
            <img src="./img/LogoWhite.png" alt="Logo White">
        </section>
        <section id="topCenter">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shoes</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </section>
        <section id="topRight">
            <a href="#">Login</a>
        </section>
    </header>
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
             <p>This is not the same sneakers blog, this is a special blog created by a sneakers fan to sneakers fans. Here you can find the last snekers released by three different brand: NIKE, JORDAN and ADIDAS. YOu can find in the sneakers section all the sneakers released(that we stocked in our database), with a little description, a resell  and retail price and a release date.</p>
            </div>
            <div id="rightside">
                <?php foreach($req as $t){ ?>
                    <figure>
                        <img src ="<?= $t['photo']; ?>" alt="Sneakers shoes">
                        <figcaption><?= $t['name_shoes'];?></figcaption>
                    </figure>

                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>