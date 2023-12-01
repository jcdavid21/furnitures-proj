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
    <title>Simple black in wood chair</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="5">
                    <div class="img-con">
                        <img src="../imgs/item5.jpeg" alt="">
                    </div>
                    <div class="right-con">
                        <div class="type">Chairs</div>
                        <h1 class="name-js">Simple black in wood chair</h1>
                        <div class="price-div"><span class="price">$98.00</span> & Free Shipping</div>
                        <div class="description">
                        The simple black wood chair exudes timeless elegance and minimalist charm. 
                        Crafted from sturdy, rich-toned wood, its sleek black finish seamlessly 
                        complements any decor. With a classic design and clean lines, this chair 
                        offers both comfort and style, making it a versatile addition to any space, 
                        whether as a dining chair, a desk companion, or an accent piece in a living 
                        area.
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