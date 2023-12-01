<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/about.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>About Us</title>
</head>
<body>
    
    <?php include("./header.php"); ?>

    <div class="bg-head">
        <img src="../imgs/about1.jpeg" alt="">
        <div class="absolute">
            <h2>About Us</h2>
            <div class="flex">
                <div>
                    From modern minimalist styles to classic pieces, our diverse range caters to <br>
                    every taste and space, inspiring unique living experiences.
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="center">
            <div class="our-story-div">
                <div class="left-col">
                    <div class="title">OUR STORY</div>
                    <h1>The fascination of workspace furniture</h1>
                    <hr>
                </div>

                <div>
                    <p>
                        Workspace furniture embodies the intersection of functionality, creativity, 
                        and comfort, weaving together a narrative of productivity and innovation. 
                        <br> <br>
                        The harmonious blend of textures, colors, and materials in furniture 
                        design whispers stories of sophistication and modernity, embracing 
                        contemporary trends while honoring timeless elegance
                    </p>
                </div>
            </div>
        </div>

        <div class="center">
            <div class="vid-con">
                <video src="../imgs/vid.mp4" autoplay loop></video>
            </div>
        </div>

        <div class="center">
            <div class="icons">
                <div>
                    <div><i class="fa-solid fa-pen" style="color: #dce227;"></i></div>
                    <div class="title">Perfect Precision</div>
                    <div class="des">
                        Egestas at faucibus neque leo ac quisque ligula ultricies euismod platea mauris.
                    </div>
                </div>

                <div>
                    <div><i class="fa-solid fa-box" style="color: #dce227;"></i></div>
                    <div class="title">Customizable</div>
                    <div class="des">
                        Cras congue consequat varius sit natoque ultrices nascetur diam ut nisl congue.
                    </div>
                </div>

                <div>
                    <div><i class="fa-solid fa-wallet" style="color: #dce227;"></i></div>
                    <div class="title">Affordable</div>
                    <div class="des">
                        Praesent mauris elit sed quis arcu, leo aliquet quis dignissim odio eget.
                    </div>
                </div>

            </div>
        </div>

        <div class="center">
           <div>
                <h1 class="testimonial-h1">Testimonials</h1>
                <div class="testimonial-div">
                <?php
                    $query = "SELECT * FROM tbl_reviews";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while($data = $result->fetch_assoc())
                    {
                ?>
                    <div class="testimonial-con">
                        <div class="from">From: <?php echo $data["review_name"]; ?></div>
                        <div class="item-name-text">Item: <?php echo $data["review_item_name"]; ?></div>
                        <div class="date">Date: <?php echo $data["review_date"]; ?></div>
                        <div><i class="fa-solid fa-quote-left" style="color: #dee333;"></i></div>
                        <div class="message"><?php echo $data["review_message"]; ?></div>
                    </div>
                <?php } ?>
                </div>
           </div>
        </div>

        <div class="center">
            <div class="form-div">
                <div>
                    <div class="title">Write your Testimonial here:</div>
                    <form action="">
                        <div class="con">
                            <label for=""><span>*</span>Name</label>
                            <input type="text" id="name">
                        </div>
                        <div class="con">
                            <label for=""><span>*</span>Item Name</label>
                            <input type="text" id="item-name">
                        </div>
                        <div class="con">
                            <label for=""><span>*</span>Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="submit">Submit</button>
                    </form>
                </div>
                <div class="img-con">
                    <img src="../imgs/img-test.avif" alt="">
                </div>
            </div>
        </div>

        <div class="center">
            <div class="grid">
                <div class="img-con">
                    <img src="../imgs/office3.avif" alt="">
                </div>
                <div class="img-con">
                    <img src="../imgs/office6.avif" alt="">
                </div>
                <div class="img-con">
                    <img src="../imgs/office7.avif" alt="">
                </div>
            </div>
        </div>
    </main>

    <?php include("./footer.php"); ?>
    <script src="../scripts/testimonial.js"></script>
</body>
</html>