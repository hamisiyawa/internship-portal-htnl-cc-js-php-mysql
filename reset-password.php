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
    <title>Reset Password</title>

</head>
<body>
    <!--include header-->
    <?php include(ROOT_PATH. "/app/includes/header.php"); ?>
   <!--//include header-->
  
    <div class="auth-content login">
        <form action="reset-password.php" method="post">
            <h2 class="form-title">Reset Your Password</h2>

            <!--errors code-->
            <?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?>
            <!--//errors code-->
            <div>
                <label for="">Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            
            <div>
                <label for="">Confirm Password</label>
                <input type="password" name="passwordConf" value="<?php echo $password; ?>" class="text-input">
            </div>

            <div>
                <button type="submit" name="reset-password-btn" class="btn btn-big">Reset Password</button>
            </div>
        </form>
    </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>