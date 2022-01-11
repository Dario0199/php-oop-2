<!-- Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi. -->

<?php
    require_once __DIR__ . '/classes/user.php';
    require_once __DIR__ . '/classes/premium.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop shop</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section>
        <?php 
            $normalUser = new User('Dario', 'Di Cuia', 'Iphone 13 PRO', 1200);
        ?>
        <div class="card">
            <h1>Normal User</h1>
            <h2>User: <?php echo $normalUser->getFirstName()?> <?php echo $normalUser->getLastName()?></h2>
            <h2>Product: <?php echo $normalUser->getProduct()?></h2>
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1631652956000" alt="">
            <h2>Price: <?php echo $normalUser->getPrice()?>€</h2>
        </div>
    </section>
    
    <section>
        <?php 
            $premiumUser = new Premium('Dario', 'Di Cuia', 'Iphone 13 PRO', 1200);
        ?>
        <div class="card">
            <h1>Premium User</h1>
            <h2>User: <?php echo $normalUser->getFirstName()?> <?php echo $normalUser->getLastName()?></h2>
            <h2>Product: <?php echo $premiumUser->getProduct()?></h2>
            <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1631652956000" alt="">
            <h2>Discount: <?php echo $premiumUser->discount?>%</h2>
            <h2>Final Price: <?php echo $premiumUser->getDiscount()?>€</h2>
        </div>
    </section>
</body>
</html>