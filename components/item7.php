<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/item.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Ergonomic Lazy Chair</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="7">
                    <div class="img-con">
                        <img src="../imgs/store1.jpeg" alt="">
                    </div>
                    <div class="right-con">
                        <div class="type">Chairs</div>
                        <h1 class="name-js">Ergonomic Lazy Chair</h1>
                        <div class="price-div"><span class="price">$229.00</span> & Free Shipping</div>
                        <div class="description">
                        The ergonomic lazy chair is a specially designed seat that prioritizes 
                        comfort and support for extended periods of lounging or relaxation. 
                        It typically features adjustable reclining angles, lumbar support, and 
                        padded armrests to promote proper posture and reduce strain on the body
                        </div>
                        <div class="add-div">
                            <div class="qnty-td">
                                <div class="minus-btn">-</div>
                                <div class="qnty-js"><input type="text" class="qnty-input" min="1" max="10" value="1"></div>
                                <div class="add-btn">+</div>
                            </div>
                            <button class="add-cart">Add to cart</button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include("./footer.php"); ?>

    <script src="../scripts/quantity.js"></script>
    <script src="../scripts/cartSolo.js"></script>
</body>
</html>