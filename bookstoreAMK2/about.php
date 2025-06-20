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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
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
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
        <p>At A.M. Karadi & Associates, we offer a carefully curated collection of books to satisfy every reader’s taste. Our long-standing experience since 1945 ensures you get quality and authenticity in every purchase.</p>
        <p>We prioritize customer satisfaction by providing excellent service, fast delivery, and personalized recommendations to help you discover your next favorite book.</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Amazing collection and fast delivery! Always find what I’m looking for. Highly recommend A.M. Karadi & Associates.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arthur Caldwell</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Great customer service and authentic books. Love the personalized recommendations and easy shopping experience.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Isla Montgomery</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>My go-to bookstore for all genres. Reliable, affordable, and the quality of books is outstanding!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>George Whitmore</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Very happy with their quick response and smooth ordering process. Truly a trusted name in bookselling.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amelia Thornton</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Beautifully curated books and excellent packaging. Makes buying books online a delightful experience.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Oliver Bennett</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Exceptional service and a fantastic range of books. Shopping here always feels personal and trustworthy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Charlotte Hayes</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/amkaradi/" class="fab fa-facebook-f"></a>
            <a href="https://www.linkedin.com/in/your-profile-link/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/your-twitter-handle/" class="fab fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/a.m.karadi/" class="fab fa-instagram"></a>
         </div>
         <h3>James Hargrove</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
           <a href="https://www.facebook.com/amkaradi/" class="fab fa-facebook-f"></a>
            <a href="https://www.linkedin.com/in/your-profile-link/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/your-twitter-handle/" class="fab fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/a.m.karadi/" class="fab fa-instagram"></a>
         </div>
         <h3>Sophie Middleton</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/amkaradi/" class="fab fa-facebook-f"></a>
            <a href="https://www.linkedin.com/in/your-profile-link/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/your-twitter-handle/" class="fab fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/a.m.karadi/" class="fab fa-instagram"></a>
         </div>
         <h3>Henry Lancaster</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/amkaradi/" class="fab fa-facebook-f"></a>
            <a href="https://www.linkedin.com/in/your-profile-link/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/your-twitter-handle/" class="fab fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/a.m.karadi/" class="fab fa-instagram"></a>
         </div>
         <h3>Ella Penrose</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/amkaradi/" class="fab fa-facebook-f"></a>
            <a href="https://www.linkedin.com/in/your-profile-link/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/your-twitter-handle/" class="fab fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/a.m.karadi/" class="fab fa-instagram"></a>
         </div>
         <h3>William Ashford</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/amkaradi/" class="fab fa-facebook-f"></a>
            <a href="https://www.linkedin.com/in/your-profile-link/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/your-twitter-handle/" class="fab fa-twitter" target="_blank"></a>
            <a href="https://www.instagram.com/a.m.karadi/" class="fab fa-instagram"></a>
         </div>
         <h3>Lucy Fairchild</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>