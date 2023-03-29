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
    <title>Admin-manage-topics</title>

</head>
<body>
    <!--adminheader-->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--Admin-page-wrapper-->
    <div class="admin-wrapper">
        <!--Left-sidebar-->
        <?php include(ROOT_PATH . "/app/includes/adminSideBar.php"); ?>
        <!--//Left-sidebar-->

        <!--Admin content-->
          <div class="admin-content">
              <div class="content block topic">
                <h2 class="add-intern">Manage topics</h2>
                   <!--include messages file-->
                   <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <table class="t-topic">
                    <thead>
                        <th>SN</th>
                        <th>Employer</th>
                        <th>Title</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($posts as $key => $post){ ?>
                         <tr>
                             <td><?php echo $key + 1; ?></td>
                             <td><?php echo $post['employer']; ?></td>
                             <td><?php echo $post['title']; ?></td>
                             <td><a href="../posts/edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                             <td><a href="../posts/edit.php?delete_id=<?php echo $post['id']; ?>"><i class="fa fa-trash red" aria-hidden="true"></i></a></td>
                         </tr>
                        <?php } ?>
                       
                    </tbody>
                </table>
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