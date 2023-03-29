<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/database/db.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/application.php"); ?>

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
    <title>apply</title>

</head>
<body>
   <!--include header-->
   <?php include(ROOT_PATH. "/app/includes/header.php"); ?>
   <!--//include header-->
       <div class="application-content">
        <form action="application.php" method="post">
        <h2 class="form-title">Applicant Details</h2>
            
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

           <div class="user-details">
               <div class="input-box">
                  <span class="details">Full Name</span>
                  <input type="text" name="full_name" value="<?php echo $full_name; ?>" placeholder="Enter your name">
               </div>

               <div class="input-box">
                  <span class="details">Email</span>
                  <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">
               </div>

               <div class="input-box">
                  <span class="details">Phone Number</span>
                  <input type="text" name="phone_num" value="<?php echo $phone_num; ?>" placeholder="Enter your Phone Number">
               </div>

               <div class="input-box">
                  <span class="details">Employer</span>
                  <input type="text" name="employer" value="<?php echo $employer; ?>" placeholder="Enter your Course">
               </div>

               <div class="input-box">
                  <span class="details">Job-title</span>
                  <input type="text" name="title" value="<?php echo $title; ?>" placeholder="Enter job title">
               </div>

               <div class="input-box">
                  <span class="details">Gender</span>
                  <input type="text" name="gender" value="<?php echo $gender; ?>" placeholder="Enter Your gender">
               </div>
            </div>  

            <div class="button">
               <button  type="submit" class="input" name="application"> Submit</button>
            </div>   
        </form>
       </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>