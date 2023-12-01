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
    <title>Armchair black in wood</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="4">
                    <div class="img-con">
                        <img src="../imgs/item4.jpeg" alt="">
                    </div>
                    <div class="right-con">
                        <div class="type">Chairs</div>
                        <h1 class="name-js">Armchair black in wood</h1>
                        <div class="price-div"><span class="price">$128.00</span> & Free Shipping</div>
                        <div class="description">
                        The armchair is crafted with a sleek black finish, featuring a sturdy 
                        wooden frame. Its design combines comfort and elegance, providing a 
                        stylish addition to any space. With its classic black color and durable 
                        wooden construction, this armchair offers both functionality and aesthetic 
                        appeal, suitable for various interior styles.
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