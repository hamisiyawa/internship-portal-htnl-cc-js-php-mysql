<?php include("path.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/contact.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!--fontawesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--custom styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>About us</title>

</head>
<body>
   <!--include header-->
   <?php include(ROOT_PATH. "/app/includes/header.php"); ?>
   <!--//include header-->
   <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
        <!--page-wrapper-->
    <div class="page-wrapper">
    
     
      <!--Content-->
      <div class="content clearfix">
     
         <!--main-content-->
         <div class="about-content">
           <div class="about-item">
              <h2>Mision</h2>
              <h4>Excellence in producing highly skilled, well qualified and globally competitive graduands</h4>
           </div>
             
           <div class="about-item">
              <h2>Vision</h2>
              <h4>Committed to provide affordable and high quality education for the training and development of professionals equipped with the technological knowledge and skills responsive to the demands of both local and international communities</h4>
           </div>

           <div class="contact">
              
              <h2>Need Help <i class="fa fa-question-circle" aria-hidden="true"></i></h2>
              <h2><i class="fa fa-phone" aria-hidden="true"></i>0113648089</i></h2>
              <form action="about.php" class="contact-form" method="post">
                  <h3>Contact us</h3>
                  
                  <?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?>
                  
                  <label for=""> Name</label>
                  <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your name..">
           
                  <label for=""> Email</label>
                  <input type="text" id="name" name="email" value="<?php echo $email; ?>" placeholder="Your email..">
           
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" value="<?php echo $subject; ?>" placeholder="Write something.."></textarea>

                  <input type="submit" name="contact-btn" value="Submit">
              </form>
           </div>
         </div>
         <!--//main-content-->
      </div>
      <!--//content-->
   </div>
    <!--//page-wraper-->
    <!--Footer-->
    <?php include(ROOT_PATH. "/app/includes/footer.php"); ?>
     <!--//Footer-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>