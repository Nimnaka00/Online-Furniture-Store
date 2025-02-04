<?php

include 'config.php';

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

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="./images/About_new.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At GreenCrest, we are committed to providing high-quality furniture that combines elegance, durability, and sustainability. Our products are crafted with responsibly sourced materials to promote a greener planet while maintaining superior quality and craftsmanship. Designed to last, our furniture offers a perfect blend of modern, classic, and rustic styles, ensuring that every piece enhances your space with timeless elegance.</p>
         <p>We offer customization options, allowing you to personalize furniture to match your unique style and needs. Our competitive pricing ensures that you get high-quality furniture without compromising on design or affordability. With hassle-free and secure delivery straight to your doorstep, we make furnishing your home effortless. Additionally, our dedicated customer support team is always ready to assist you at every step, ensuring a seamless shopping experience.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>