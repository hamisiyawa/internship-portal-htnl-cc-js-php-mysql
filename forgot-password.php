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
    <title>forgot-password</title>

</head>
<body>
    <!--include header-->
    <?php include(ROOT_PATH. "/app/includes/header.php"); ?>
   <!--//include header-->
  
    <div class="auth-content login">
        <form action="forgot-password.php" method="post">
            <h2 class="form-title">Recover Your Password</h2>
            <p>
              please enter your email address you used to sign up on this portal and we will assist you
              in recovering your password.
            </p>
            <!--errors code-->
            <?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?>
            <!--//errors code-->

            <div>
                <input type="text" name="email" class="text-input">
            </div>

            <div>
                <button style="width: 100%;" type="submit" name="forgot-password" class="btn btn-big">
                    Recover Your Password 
                </button>
            </div>
        </form>
    </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>