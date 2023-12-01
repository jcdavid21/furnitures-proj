<!DOCTYPE html>
<?php session_start(); ?>
<?php require_once("./backend/connection.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Home page</title>
</head>
<body>
    <header>
        <div class="con">
            <div class="left-row">
                <a href="./index.php" class="a-js"><h1><span>h</span> HYPERGO</h1></a>
                <a href="./components/store.php" class="a-js"><div>Store</div></a>
                <a href="./components/office.php" class="a-js"><div>Home Office</div></a>
            </div>

            <div class="right-row">
                <a href="./components/about.php" class="a-js"><div>About</div></a>
                <a href="./components/contact.php" class="a-js"><div>Contact</div></a>
                <a href="<?php
                    if(isset($_SESSION["acc_id"])){
                        echo "./components/cart.php";
                    }else{
                        echo "./components/login.php";
                    }
                ?>" class="a-js">
                    <div class="relative">
                        <i class="fa-solid fa-cart-shopping fa-xl" style="color: rgb(96, 96, 96);"></i>
                        <div class="count">
                            <?php
                                if(isset($_SESSION["acc_id"]))
                                {
                                    $acc_id = $_SESSION["acc_id"];
                                    $query = "SELECT * FROM tbl_cart WHERE acc_id = ?";
                                    $stmt = $conn->prepare($query);
                                    $stmt->bind_param("i", $acc_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    echo $result->num_rows;
                                }else{
                                    echo "0";
                                }
                            ?>
                        </div>
                    </div>
                </a>
                <?php
                    if(isset($_SESSION["acc_id"]))
                    {
                        echo "
                        <div class='profile-logIn'>
                            <a href='./components/profile.php' class='a-js'>
                                <i class='fa-solid fa-user fa-xl' style='color: rgb(96, 96, 96);'></i>
                            </a>
                            <i class='fa-solid fa-caret-down fa-xl drop-down' style='color: rgb(96, 96, 96);'></i>
                            <div class='profile-div'>
                                <a href='./components/profile.php' class='profile'><div>Profile</div></a>
                                <a href='./backend/logout.php' class='logOut'><div>Log out</div></a>
                            </div>
                        </div>
                        ";
                    }else{
                        echo "
                        <a href='./components/login.php' class='a-js profile-logIn'>
                            <i class='fa-solid fa-user fa-xl' style='color: rgb(96, 96, 96);'></i>
                        </a>
                        ";
                    }
                ?>
            </div>
        </div>
    </header>

    <div class="bg-head">
        <img src="./imgs/img1.jpeg" alt="">
        <div class="absolute">
            <div>HOME OFFICE FURNITURE</div>
            <h2>Stay productive and get more work done!</h2>
            <a href="../components/store.php"><button>Shop Now <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i></button></a>
        </div>
    </div>

    <main>
        <div class="con-flex">
            <div class="flex">
                <div class="relative">
                    <img src="./imgs/img2.jpeg" alt="">
                    <a href="../components/store.php">
                    <div class="absolute">
                        Wooden Desk <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i>
                    </div>
                    </a>
                </div>
    
                <div class="row-2">
                    <div class="relative">
                        <img src="./imgs/img3.jpeg" alt="">
                        <a href="./components/store.php">
                        <div class="absolute">
                            Chairs <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i>
                        </div>
                        </a>
                    </div>
                    <div class="relative">
                        <img src="./imgs/img4.jpeg" alt="">
                        <a href="./components/store.php">
                        <div class="absolute">
                            Laptop Stands <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="icons">
            <div class="icons-flex">
                <div class="con">
                    <div><i class="fa-solid fa-chair" style="color: #373737;"></i></div>
                    <div>Chair</div>
                </div>

                <div class="con">
                    <div><i class="fa-solid fa-desktop" style="color: #373737;"></i></div>
                    <div>Monitor Stand</div>
                </div>

                <div class="con">
                    <div><i class="fa-solid fa-spa" style="color: #373737;"></i></div>
                    <div>Desk Plants</div>
                </div>

                <div class="con">
                    <div><i class="fa-solid fa-book" style="color: #373737;"></i></div>
                    <div>Book Table</div>
                </div>

                <div class="con">
                    <div><i class="fa-solid fa-computer-mouse" style="color: #373737;"></i></div>
                    <div>Mouse Pads</div>
                </div>
            </div>
        </div>

        <div class="items-div">
            <div>
                <div class="arrival">NEW ARRIVALS</div>
                <h1>Boost your productivity</h1>
                <hr>

                <div class="item-main-div">
                    <div class="item-con" id="1">                      
                        <div class="img-con">
                            <a href="./components/item1.php">
                                <img src="./imgs/item1.jpeg" alt="">
                            </a>
                            <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                        </div>
                       
                        <div class="name-js">EcoAir plant on brass</div>
                        <div class="price">$19.00</div>
                        
                    </div>

                    <div class="item-con" id="2">
                        
                        <div class="img-con">
                            <a href="./components/item2.php">
                                <img src="./imgs/item2.jpeg" alt="">
                            </a>
                            <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                        </div>
                        
                        <div class="name-js">HyperFresh Plant</div>
                        <div class="price">$16.00</div>
                    </div>

                    <div class="item-con" id="3">                     
                        <div class="img-con">
                            <a href="./components/item3.php">
                                <img src="./imgs/item3.jpeg" alt="">
                            </a>
                            <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                        </div>
                        
                        <div class="name-js">Curved walnut monitor stand</div>
                        <div class="price">$64.00</div>
                    </div>

                    <div class="item-con" id="4">
                        <div class="img-con">
                            <a href="./components/item4.php">
                                <img src="./imgs/item4.jpeg" alt="">
                            </a>
                            <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                        </div>
                        <div class="name-js">Armchair back in wood</div>
                        <div class="price">$128.00</div>
                    </div>

                    <div class="item-con" id="5">
                        <div class="img-con">
                            <a href="./components/item5.php">
                            <img src="./imgs/item5.jpeg" alt="">
                            </a>
                            <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                        </div>
                        <div class="name-js">Simple black in wood chair</div>
                        <div class="price">$98.00</div>
                    </div>

                    <div class="item-con" id="6">
                        <div class="img-con">
                            <a href="./components/item6.php">
                            <img src="./imgs/item6.jpeg" alt="">
                            </a>
                            <i class="fa-solid fa-basket-shopping cart-js" style="color: #292929;"></i>
                        </div>
                        <div class="name-js">Lunar Wooden Desk</div>
                        <div class="price">$144.00</div>
                    </div>
                </div>

                <div class="button-div">
                    <a href="../components/store.php"><button>View alll products <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i></button></a>
                </div>
            </div>
        </div>

        <div class="offers-center">
            <div class="offers-flex">
                <div>
                    <div class="offer-title"><i class="fa-solid fa-truck" style="color: #ddbb11;"></i> Free Shipping</div>
                    <div class="des">Free Delivery Manila-QC</div>
                </div>

                <div>
                    <div class="offer-title"><i class="fa-regular fa-clock" style="color: #ddbb11;"></i> Support 24/7</div>
                    <div class="des">Always avaliable to help you</div>
                </div>

                <div>
                    <div class="offer-title"><i class="fa-solid fa-money-bill" style="color: #ddbb11;"></i> Money return</div>
                    <div class="des">Money Return Guaranteed</div>
                </div>

                <div>
                    <div class="offer-title"><i class="fa-solid fa-gift" style="color: #ddbb11;"></i> Member discount</div>
                    <div class="des">Get up to 50% discount for members</div>
                </div>
            </div>
        </div>

        <div class="featured-div">
            <div>
                <h1>Featured collection</h1>
                <div class="des">
                    <div>
                    Experience the perfect blend of comfort and aesthetics as our furniture pieces 
                    redefine relaxation and functionality in your home.
                    </div>
                </div>

                <div class="flex">
                    <div class="con">
                        <img src="./imgs/item7.png" alt="">
                        <div>Chairs</div>
                    </div>

                    <div class="con">
                        <img src="./imgs/item8.png" alt="">
                        <div>Cabinets</div>
                    </div>

                    <div class="con">
                        <img src="./imgs/item10.png" alt="">
                        <div>Lamps</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-bot">
            <img src="./imgs/bg-1.jpeg" alt="">
            <div class="flex">
                <div>
                    <div class="des">FEATURED COLLECTION / 01</div>
                    <h2>Neo Futura Office Furniture</h2>
                </div>
                <div>
                    <a href="./components/store.php"><button>Shop Collection <i class="fa-solid fa-arrow-right" style="color: #fff;"></i></button></a>
                </div>
            </div>
        </div>

        <div class="bg-bot">
            <img src="./imgs/bg-2.jpeg" alt="">
            <div class="flex">
                <div>
                    <div class="des">FEATURED COLLECTION / 02</div>
                    <h2>Rustic Home Office Furniture Set</h2>
                </div>
                <div>
                    <a href="./components/store.php"><button>Shop Collection <i class="fa-solid fa-arrow-right" style="color: #fff;"></i></button></a>
                </div>
            </div>
        </div>

        <div class="set-flex">
            <div class="set-div">
                <div class="work-home">WORK FROM HOME</div>
                <div class="con">
                    <h1>Keep inspired & motivated</h1>
                    <div class="des">
                    Discover furniture that elevates your space and mindset! Our collection is 
                    designed to ignite inspiration and fuel motivation, offering stylish, functional pieces that transform your surroundings into an oasis of creativity and productivity.
                    </div>
                    <div class="img-con">
                        <div class="img-con-div">
                            <img src="./imgs/img5.jpeg" alt="">
                        </div>
                        <h1>Claire Configurable Minimal Clean Work from Home Set</h1>
                        <div class="details">Details not availabe </div>
                    </div>
                    <div class="img-con">
                        <div class="img-con-div">
                            <img src="./imgs/img6.jpeg" alt="">
                        </div>
                        <h1>Jack & Joel Hyper Luxe Work Home Office Set</h1>
                        <div class="details">Details not availabe</div>
                    </div>
                    <div class="img-con">
                        <div class="img-con-div">
                            <img src="./imgs/img7.jpeg" alt="">
                        </div>
                        <h1>Juno Ultra Minimalism Work from Home Set with Chair</h1>
                        <div class="details">Details not availabe</div>
                    </div>
                    <div class="img-con">
                        <div class="img-con-div">
                            <img src="./imgs/img8.jpeg" alt="">
                        </div>
                        <h1>Clint Modern Office Furniture Set with Configurable Desk</h1>
                        <div class="details">Details not availabe</div>
                    </div>
                    <div class="img-con">
                        <div class="img-con-div">
                            <img src="./imgs/img9.jpeg" alt="">
                        </div>
                        <h1>Essential Work from Home Set with HyperErgo Maxx Chair</h1>
                        <div class="details">Details not availabe</div>
                    </div>
                    <div class="img-con">
                        <div class="img-con-div">
                            <img src="./imgs/img10.jpeg" alt="">
                        </div>
                        <h1>HyperAcitve Work from Anywhere for High Mobility Creative</h1>
                        <div class="details">Details not availabe</div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <img src="imgs/img-footer.jpeg" alt="">
            <div class="absolute">
                <div class="div1">CUSTOM SETUPS</div>
                <div class="div2">Let's build your dream working space</div>
                <a href="../components/store.php"><button>Shop Now <i class="fa-solid fa-arrow-right" style="color: #0d0d0d;"></i></button></a>
            </div>
        </div>
        <div class="soc-media">
            <div>
                <div class="flex">
                    <a href="./index.php"><h1><span>h</span> HYPERGO</h1></a>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <a href="./components/faqs.php"><div class="faqs">FAQs</div></a>
                </div>
            </div>
        </div>
        <div class="copy-right">Copyright © 2023 Office Furniture Store</div>
    </footer>

    <script src="./scripts/addToCartIndex.js"></script>
    <script src="./scripts/header.js"></script>
</body>
</html>