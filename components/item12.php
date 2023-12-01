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
    <title>Iregn Black Gloss Set</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="12">
                    <div class="img-con">
                        <img src="../imgs/store6.jpeg" alt="">
                    </div>
                    <div class="right-con">
                        <div class="type">Chairs</div>
                        <h1 class="name-js">Iregn Black Gloss Set</h1>
                        <div class="price-div"><span class="price">$160.00</span> & Free Shipping</div>
                        <div class="description">
                            The Black Gloss Set is a stylish and contemporary collection 
                            featuring various items or products finished with a sleek black 
                            gloss surface. Typically, this set includes a range of items such 
                            as kitchenware, furniture, electronics, or accessories that boast a 
                            shiny, reflective black finish
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