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
    <title>HyperFresh plant on wooden vase</title>
</head>
<body>
    
    <?php include("./header.php"); ?>
    
    <main>
        <div class="center">
            <div class="div">
                <div class="item-con grid" id="2">
                    <div class="img-con">
                        <img src="../imgs/item2.jpeg" alt="">
                    </div>
                    <div class="right-con">
                        <div class="type">Desk Plants</div>
                        <h1 class="name-js">HyperFresh plant on wooden vase</h1>
                        <div class="price-div"><span class="price">$16.00</span> & Free Shipping</div>
                        <div class="description">
                        The HyperFresh plant is a vibrant and resilient botanical beauty known 
                        for its lush foliage and striking appearance. With its glossy, deep 
                        green leaves and an exquisite display of textures, this plant brings a 
                        touch of natural elegance to any space. Nestled in a charming wooden vase, 
                        it not only adds a refreshing burst of greenery but also serves as an
                         eye-catching decorative piece, effortlessly blending modern style with a 
                         hint of rustic charm.
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