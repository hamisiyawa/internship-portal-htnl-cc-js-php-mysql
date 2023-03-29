<?php include("../../path.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/posts.php"); ?>
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
    <title>Admin-Add-posts</title>

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
                 <a href="index.php" class="btn btn-big">Manage internships</a>
                 <a href="create.php"class="btn btn-big">Add internships</a>
              </div>
              <div class="content block">
                <form action="create.php" method="post">
                    <h2 class="add-intern">Add Internship</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <div>
                        <label for="">Employer</label>
                        <input type="text" name="employer" value="<?php echo $employer; ?>" class="text-input lg">
                    </div>

                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="text-input lg">
                    </div>

                    <div>
                        <label for="">Description</label>
                        <textarea name="description" value="<?php echo $description; ?>" id="description"></textarea>
                    </div>
                     
                    <div>
                        <label for="">Stipend Ksh.</label>
                        <input type="text" name="stipend" value="<?php echo $stipend; ?>" class="text-input lg">
                    </div>

                    <div>
                        <label for="">Start Date</label>
                        <input type="date" name="start_date" value="<?php echo $start_date; ?>" class="text-input lg">
                    </div>

                    <div>
                        <label for="">End Date</label>
                        <input type="date" name="end_date" value="<?php echo $end_date; ?>" class="text-input lg">
                    </div>

                    <div>
                        <button type="submit" name="add-intern" class="btn btn-big">Add Internship</button>
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