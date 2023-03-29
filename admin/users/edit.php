<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!--admin styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin-Edit-users</title>

</head>
<body>
    <!--adminheader-->
       <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--Admin-page-wrapper-->
    <!--Admin-page-wrapper-->
    <div class="admin-wrapper">
       <!--Left-sidebar-->
          <?php include(ROOT_PATH . "/app/includes/adminSideBar.php"); ?>
       <!--//Left-sidebar-->

        <!--Admin content-->
          <div class="admin-content">
              <div class="button-group">
                 <a href="index.php" class="btn btn-big">Manage users</a>
                 <a href="create.php"class="btn btn-big">Add user</a>
              </div>
              <div class="content block">
                <form action="edit.php" method="post">
                   <h2 class="add-intern">Edit User</h2>

                   <?php include(ROOT_PATH. "/app/helpers/formErrors.php"); ?>
                   <input type="hidden" name="id" value="<?php echo $id; ?>" >
                   <div>
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>"  class="text-input">
                    </div>
        
                    <div>
                        <label for="">Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>"  class="text-input">
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

                    <div>
                        <?php if(isset($admin)&& $admin == 1) { ?>
                            <label>
                              <input type="checkbox" name="admin" checked>
                              Admin
                            </label>
                        <?php } else { ?>
                            <label>
                               <input type="checkbox" name="admin">
                               Admin
                        </label>
                        <?php }?>
                       
                    </div>

                    <div>
                        <button class="btn btn-big" name="update-user">Update User</button>
                    </div>
                </form>
              
              </div>
          </div>
        <!--Admin content-->

    </div>
    <!--//Admin-page-wraper-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <!--custom script-->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>