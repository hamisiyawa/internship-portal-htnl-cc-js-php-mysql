<?php include("path.php"); ?>
<!--includind registration and login file-->
<?php include(ROOT_PATH. "/app/controllers/users.php"); ?>

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
    <title>Register</title>

</head>
<body>
   <!--include header-->
   <?php include(ROOT_PATH. "/app/includes/header.php"); ?>
   <!--//include header-->
    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>
            <!--errors code-->
            <?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?>
            <!--//errors code-->
            
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
            </div>
  
            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
                
              
            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>"  class="text-input">
            </div>

            <div>
              <label for="">Password Confirmation</label>
              <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
            </div>

          <!-- <div class="radio" >
                <div class="radio left">
                     <input type="radio" name="admin"  value="student" checked>
                     <label>Student</label>
                </div>

                <div class="radio right" >
                     <input type="radio" name="admin"  value="employer" checked>
                     <label>Employer</label>
                </div>
                
            </div>-->
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>

                <p>Or <a href="<?php echo BASE_URL. "/login.php" ?>">Sign In</a></p>
        </form>
    </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>