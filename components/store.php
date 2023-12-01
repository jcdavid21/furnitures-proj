<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/store.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Store</title>
</head>
<body>

    <?php include("./header.php"); ?>

    <main>
        <div class="con">
            <div class="home-shop">Home / Shop</div>
            <h1 class="shop-title">Shop</h1>

            <div class="items-div">
                <div>
                    <div class="arrival">NEW ARRIVALS</div>
                    <h1>Get your favorite furniture</h1>
                    <hr>
    
                    <div class="item-main-div">
                        <div class="item-con" id="1">
                            <div class="img-con">
                                <a href="./item1.php"><img src="../imgs/item1.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">EcoAir plant on brass</div>
                            <div class="price">$19.00</div>
                            
                        </div>
    
                        <div class="item-con" id="2">
                            <div class="img-con">
                                <a href="./item2.php"><img src="../imgs/item2.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">HyperFresh Plant</div>
                            <div class="price">$16.00</div>
                        </div>
    
                        <div class="item-con" id="3">
                            <div class="img-con">
                                <a href="./item3.php"><img src="../imgs/item3.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Curved walnut monitor stand</div>
                            <div class="price">$64.00</div>
                        </div>
    
                        <div class="item-con" id="4">
                            <div class="img-con">
                                <a href="./item4.php"><img src="../imgs/item4.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Armchair back in wood</div>
                            <div class="price">$128.00</div>
                        </div>
    
                        <div class="item-con" id="5">
                            <div class="img-con">
                                <a href="./item5.php"><img src="../imgs/item5.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Simple black in wood chair</div>
                            <div class="price">$98.00</div>
                        </div>
    
                        <div class="item-con" id="6">
                            <div class="img-con">
                                <a href="./item6.php"><img src="../imgs/item6.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Lunar Wooden Desk</div>
                            <div class="price">$144.00</div>
                        </div>
                        
                        <div class="item-con" id="7">
                            <div class="img-con">
                                <a href="./item7.php"><img src="../imgs/store1.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Ergonomic Lazy Chair</div>
                            <div class="price">$229.00</div>
                        </div>

                        <div class="item-con" id="8">
                            <div class="img-con">
                                <a href="./item8.php"><img src="../imgs/store2.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">HyperErgo Executive Chair</div>
                            <div class="price">$240.00</div>
                        </div>

                        <div class="item-con" id="9">
                            <div class="img-con">
                                <a href="./item9.php"><img src="../imgs/store3.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">HyperErgo Executive Chair Black</div>
                            <div class="price">$289.00</div>
                        </div>

                        <div class="item-con" id="10">
                            <div class="img-con">
                                <a href="./item10.php"><img src="../imgs/store4.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">HyperErgo Gaming Chair Carbon</div>
                            <div class="price">$204.00</div>
                        </div>

                        <div class="item-con" id="11">
                            <div class="img-con">
                                <a href="./item11.php"><img src="../imgs/store5.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">HyperLight Industrial Desk Lamp</div>
                            <div class="price">$80.00</div>
                        </div>

                        <div class="item-con" id="12">
                            <div class="img-con">
                                <a href="./item12.php"><img src="../imgs/store6.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Iregn Black Gloss Set</div>
                            <div class="price">$160.00</div>
                        </div>

                        <div class="item-con" id="13">
                            <div class="img-con">
                                <a href="./item13.php"><img src="../imgs/store7.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Leather Mouse Pad</div>
                            <div class="price">$30.00</div>
                        </div>

                        <div class="item-con" id="14">
                            <div class="img-con">
                                <a href="./item14.php"><img src="../imgs/store8.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Walnut Kayyu Cabinet</div>
                            <div class="price">$100.00</div>
                        </div>

                        <div class="item-con" id="15">
                            <div class="img-con">
                                <a href="./item15.php"><img src="../imgs/store9.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Wooden Essential Gadget Cabinet</div>
                            <div class="price">$59.00</div>
                        </div>

                        <div class="item-con" id="16">
                            <div class="img-con">
                                <a href="./item16.php"><img src="../imgs/store10.jpeg" alt=""></a>
                                <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                            </div>
                            <div class="name-js">Wooden Stack Coffee Set</div>
                            <div class="price">$112.00</div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include("./footer.php"); ?>

    <script src="../scripts/addToCart.js"></script>
</body>
</html>