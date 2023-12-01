<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <title>Contact</title>
</head>
<body>
    
    <?php include("./header.php"); ?>

    <div class="bg-head">
        <img src="../imgs/contact1.jpeg" alt="">
        <div class="absolute">
            <h2>Contact Us</h2>
            <div class="flex">
                <div>
                    Connect with us for all your furniture needs! Whether you're seeking advice, 
                    have questions about our products.
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="center">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.6071877054073!2d121.06801077522206!3d14.734786785767579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b070540c1241%3A0x95e787ea9415e71b!2sOur%20Lady%20Of%20Fatima%20University%20Quezon%20City!5e0!3m2!1sen!2sph!4v1700911743412!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="center">
            <div class="contact-div">
                <div class="left-col">
                    <h1>Get in touch</h1>
                    <div><i class="fa-solid fa-location-dot" style="color: #cbd726;"></i> <strong>Address</strong></div>
                    <div class="text">1 Esperanza, Novaliches, Quezon City, <br> 1118 Metro Manila</div>
                    <hr>

                    <h2>Customer service</h2>
                    <div class="text">
                        Providing exceptional service and support for all your furniture needs! Our dedicated customer service team is here
                    </div>
                    <div class="contacts">
                        <div><i class="fa-solid fa-phone" style="color: #cbd726;"></i> +63 956 5535 401</div>
                        <div><i class="fa-solid fa-envelope" style="color: #cbd726;"></i> juancarlodavid14@gmail.com</div>
                        <div><i class="fa-solid fa-clock" style="color: #cbd726;"></i> 8:00AM - 10:00PM</div>
                    </div>
                </div>

                <div class="right-col">
                    <hr>
                    <form action="">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" name="name" required>
                        
                        <label for="email">Email <span>*</span></label>
                        <input type="email" name="email" required>

                        <label for="message">Comment or message <span>*</span></label>
                        <textarea name="message" required cols="30" rows="10"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include("./footer.php"); ?>
</body>
</html>