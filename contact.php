<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <?php include "includes/header.php"; ?>

</head>

<body>

   <!-- header section starts  -->

   <?php include 'includes/navigation.php'; ?>

   <!-- header section ends -->

   <!-- contact section starts  -->

   <section class="contact">

      <div class="row">
         <div class="image">
            <img src="images/contact-img.svg" alt="">
         </div>
         <form action="" method="post">
            <h3>get in touch</h3>
            <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
            <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
            <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
            <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
         </form>
      </div>

   </section>

   <!-- contact section ends -->

   <!-- faq section starts  -->

   <section class="faq" id="faq">

      <h1 class="heading">FAQ</h1>

      <div class="box-container">

         <div class="box active">
            <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
         </div>

         <div class="box active">
            <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
         </div>

         <div class="box">
            <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
         </div>

         <div class="box">
            <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
         </div>

         <div class="box">
            <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
         </div>

         <div class="box">
            <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
         </div>

      </div>

   </section>

   <!-- faq section ends -->










   <!-- footer section starts  -->

   <?php include 'includes/footer.php'; ?>

   <!-- footer section ends -->


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>