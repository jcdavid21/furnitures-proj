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
    <title>HyperErgo Executive Chair</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="8">
                    <div class="img-con">
                        <img src="../imgs/store2.jpeg" alt="">
                    </div>
                    <div class="right-con">
                        <div class="type">Chairs</div>
                        <h1 class="name-js">HyperErgo Executive Chair</h1>
                        <div class="price-div"><span class="price">$240.00</span> & Free Shipping</div>
                        <div class="description">
                        The HyperErgo Executive Chair is a premium ergonomic office chair designed 
                        to prioritize comfort, support, and adjustability for extended periods of 
                        sitting. It typically features a high backrest for full spinal support, 
                        adjustable lumbar support, padded armrests, and a variety of customizable 
                        adjustments such as seat height, tilt tension, and seat depth.
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