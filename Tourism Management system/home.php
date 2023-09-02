<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="services.php">services</a>
      <a href="package.php">Tour Packages</a>
      <a href="book.php">Book</a>
      <a href="Gallery.php">Gallery</a>
      <a href="about.php">About</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel, enjoy</span>
               <h3>travel arround sri lanka</h3>
               <a href="https://effulgent-lily-186c07.netlify.app/" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel, enjoy</span>
               <h3>discover the new places</h3>
               <a href="Gallery.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/whale-watching.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel, enjoy</span>
               <h3>make your tour worthwhile</h3>
               <a href="Gallery.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/adventure.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/travel-map.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/hotel.png" alt="">
         <h3>accomadation</h3>
      </div>

      <div class="box">
         <img src="images/order.png" alt="">
         <h3>food ordering</h3>
      </div>

      <div class="box">
         <img src="images/whale.png" alt="">
         <h3>whale watching</h3>
      </div>

      <div class="box">
         <img src="images/tent.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

  <div class="content">
      <h3>about us</h3>
      <p>We are Team Dark Infinity. Meet our Team Members. </br>
         <ul>
            <li>AA1931 - Daham Kahawearachchi - Software Engineer</li>
            <li> </li>
            <li> </li>
            <li> </li>
            <li> </li>
         </ul>
      </p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> top destinations </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/Sigiriya.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sigiriya</h3>
            <p>Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town
                of Dambulla in the Central Province, Sri Lanka. It is a site of historical and archaeological
                significance that is dominated by a massive column of rock approximately 180 m high.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ella.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ella</h3>
            <p>Ella has long been one of the most popular destination in Sri Lanka, sought after for its laid-back atmosphere and picturesque 
               hiking trails. It's also the starting or end point of the famed Kandy-Ella train route, which is often referred to as 
               the most scenic train ride in the world.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/mirissa.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mirissa</h3>
            <p>Popular beach, home to many seafood restaurants, best known for surfing & seasonal whale watching.Long and width beach is suitable 
               for water sports and the Mirissa´s surroundings for observing of local nature life.
               Mirissa is the largest fishing port on the south coast.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 30% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->




<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="services.php"> <i class="fas fa-angle-right"></i> services</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> tour package</a>
         <a href="Gallery.php"> <i class="fas fa-angle-right"></i> Gallery</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +9471-232-0990 </a>
         <a href="#"> <i class="fas fa-phone"></i> +9471-417-2911 </a>
         <a href="#"> <i class="fas fa-envelope"></i> lankatravels@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> colombo, sri lanka - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>team dark infinity</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
