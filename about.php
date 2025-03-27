<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="aurumelle_css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<div class="about-img-background">
<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>
</div>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img1.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At Aurumelle Pastries, we are not merely a bakery—we are a group of enthusiastic bakers and dessert creators committed to producing exquisite, handcrafted pastries that provide delight with each bite. With a passion for both timeless flavors and inventive designs, we combine classic baking methods with contemporary artistry to create desserts that are as visually appealing as they are tasty.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What We Provide?</h3>
            <p>We offer a diverse selection of pastries and desserts, providing options for every event:</p>
            <ul>
                <li>🍰 <strong>Handmade Cakes</strong> – Ideal for birthdays, weddings, and special occasions.</li>
                <li>🥐 <strong>Light & Flaky Pastries</strong> – Freshly baked croissants, danishes, and more available daily.</li>
                <li>🍪 <strong>Deluxe Cookies & Treats</strong> – Soft, chewy, and full of delightful flavors.</li>
                <li>🍮 <strong>Exceptional Desserts</strong> – From tarts to mousses, made with precision and care.</li>
                <li>🎁 <strong>Personalized Orders & Gift Packages</strong> – Elegant and thoughtful sweets for your loved ones.</li>
            </ul>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>

        <div class="image">
            <img src="images/about-img2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Who We Are?</h3>
            <p>At Aurumelle Pastries, we are dedicated to delivering excellence in every bite:</p>
            <ul>
                <li>✨ <strong>Unmatched Quality</strong> – We use only the finest ingredients, ensuring freshness and rich flavors.</li>
                <li>🥇 <strong>Crafted with Care</strong> – Every pastry is made from scratch, blending skill and passion.</li>
                <li>🎂 <strong>Customized Just for You</strong> – Bespoke cakes and pastries tailored to your unique taste.</li>
                <li>💛 <strong>Outstanding Service</strong> – We go beyond desserts, creating memorable experiences.</li>
            </ul>
            <p>Ready to treat yourself? Visit us today or place an order to experience the magic of Aurumelle Pastries!</p>
        </div>


    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>