<!-- shop online;

1) ci saranno sicuramente dei prodotti da acquistare;
2) degli utenti che fanno shopping.

Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...

$c = new CreditCard(..);
$user->insertCreditCard($c);

BONUS:
Aggiungete una pagina (vista) in cui creare istanze delle classi create e mostrare alcuni dati. Su cosa sia la pagina siete liberi (potrebbe essere la pagina di account dell'utente, oppure una pagina di elenco prodotti o dettaglio prodotto, con visualizzazione dello username utente in alto a destra).
Buon pranzo, buon lavoro e buon weekend. A lunedì! -->

<?php 
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";

echo "Questo è l'index" . "<br>";

// $user1 = new User("Scar", "TheDog", "Gold", 6);
// $user2 = new User("Bruce", "TheBigCat", "Gold", 5);
// $user3 = new User("Steve", "TheSmallCat", "Bronze", 3);

$product1 = new Product("Crocchette", 59 . "€", "Delle crocchette squisite salmollo", getDiscount($user1), lastPrice($product1));

$product2 = new Product("Sabbietta", 5.50 . "€", "Della sabbia per gatti", getDiscount($user2), lastPrice($product2));

$product3 = new Product("Topolino", 2.50 . "€", "Un topolino di stoffa con cui giocare", getDiscount($user3), lastPrice($product3));

function getDiscount($userIndex) {
    if ($userIndex->userLevel == "Gold") {
        return  20; 
    } elseif ($userIndex->userLevel == "Bronze") {
        return  10;
    }
}

function lastPrice($productIndex) {
    if ($productIndex->discount = 20) {
        return 20; 
    } elseif ($productIndex->discount = 10) {
        return 10;
    }
}



echo  "<hr>";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            #users-title,
            #product-title {
                text-align: center;
                margin: 30px 0 10px 0;
                color: Blue;
            }
            .container-users,
            .container-products
             {
                display: flex;
                flex-direction: row;
                margin: 0 auto;
                width: 80%;
                padding: 20px;
            }
            .user,
            .product {
                text-align: center;
                width: calc(100% / 3);
                border: 1px solid black;
                margin:  0 5px;
            }
            .user h2,
            .product h2 {
                margin: 10px;
            }
            ul {
                list-style-type: none;
            }
            ul li {
                margin: 5px;
            }
            .product li:last-child{
                background-color: lightgreen;
                border: 1px solid black;
                padding: 5px;
                display: inline-block;
            }
            h4 {
                margin: 10px 0;
            }
        </style>
        <title>Test for E-shop</title>
    </head>
    <body>
        <h1 style="text-align: center; margin-top: 10px;">Para's Shop</h1>

        <div id="container_main">

            <!-- USER  -->
            <h2 id="users-title">-- Users --</h2>
            <div class="container-users">
                <div class="user">
                <h2>USER 1</h2>
                        <ul>
                            <li><?= $user1->name; ?></li>
                            <li><?= $user1->surname; ?></li>
                            <li><?= $user1->userLevel; ?></li>
                            <li><?= $user1->age; ?></li>
                        </ul>
                </div>
                <div class="user">
                    <h2>USER 2</h2>
                        <ul>
                            <li><?= $user2->name; ?></li>
                            <li><?= $user2->surname; ?></li>
                            <li><?= $user2->userLevel; ?></li>
                            <li><?= $user2->age; ?></li>
                        </ul>
                </div>
                <div class="user">
                    <h2>USER 3</h2>
                        <ul>
                            <li><?= $user3->name; ?></li>
                            <li><?= $user3->surname; ?></li>
                            <li><?= $user3->userLevel; ?></li>
                            <li><?= $user3->age; ?></li>
                        </ul>
                </div>
            </div>

            <!-- PRODUCTS  -->
            <h2 id="product-title">-- Products --</h2>
            <div class="container-products">
                <div class="product">
                <h2>Product 1</h2>
                        <ul>
                            <li>
                                <?= $product1->prodName;?>
                            </li>
                            <li>
                                <?= $product1->price;?>
                            </li>
                            <li>
                                <?=$product1->description;?>
                            </li>
                            <li class="discount">
                                <p>
                                    Sconto: 
                                    -
                                    <?=$product1->discount;?>
                                    %
                                </p>
                            </li>
                        </ul>

                        <!-- PREZZO TOTALE  -->
                        <h4>Total Price: <?= $product1->lastPrice; ?>
                        </h4>
                        
                </div>
                <div class="product">
                    <h2>Product 2</h2>
                        <ul>
                            <li>
                                <?= $product2->prodName; ?>
                            </li>
                            <li>
                                <?= $product2->price; ?>
                            </li>
                            <li>
                                <?= $product2->description; ?>
                            </li>
                            <li class="discount">
                                <p>
                                    Sconto: 
                                    -
                                    <?=$product2->discount;?>
                                    %
                                </p>
                            </li>
                        </ul>

                        <!-- PREZZO TOTALE  -->
                        <h4>Total Price: <?= $product2->lastPrice; ?>
                        </h4>

                </div>
                <div class="product">
                    <h2>Product 3</h2>
                        <ul>
                            <li>
                                <?= $product3->prodName; ?>
                            </li>
                            <li>
                                <?= $product3->price; ?>
                            </li>
                            <li>
                                <?= $product3->description; ?>
                            </li>
                            <li class="discount">
                                <p>
                                    Sconto: 
                                    -
                                    <?=$product3->discount;?>
                                    %
                                </p>
                            </li>
                        </ul>
                        
                        <!-- PREZZO TOTALE  -->
                        <h4>Total Price: <?= $product3->lastPrice; ?>
                        </h4>
                        
                </div>
            </div>

        </div>

        
        

        
    </body>
</html>
