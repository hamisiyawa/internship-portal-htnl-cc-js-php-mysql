<?php include("../../path.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/posts.php"); ?>
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!--admin styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin-manage-posts</title>

</head>
<body>
    <!--adminHeader-->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
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

             <div class="content">
                <div class="intern-posted">
                    <h2 class="posted">Internship posted</h2>

                    <?php foreach($posts as $post){ ?>
                       <div class="post application">
                          <h4><strong>Employer:</strong><?php echo $post['employer']; ?></h4>
                          <h4><strong>Title:</strong><?php echo $post['title']; ?></h4>
                          <p><strong>Description:</strong><?php echo html_entity_decode($post['description']); ?></p>
                          <p><strong>Stipend: Ksh.</strong><?php echo $post['stipend']; ?></p>
                          <p><strong>Start Date:</strong><?php echo $post['start_date']; ?></p>
                          <p><strong>End Date:</strong><?php echo $post['end_date']; ?></p>
                      </div>
                    <?php } ?> 
                </div>

                <div class="recieved-app">
                    <h2 class="posted">Recieved applications</h2>
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach($applications as $key => $application){ ?>
                              <tr>
                                  <td><?php echo $key + 1; ?></td>
                                  <td><?php echo $application['full_name']; ?></td>
                                  <td><?php echo $application['email']; ?></td>
                                  <td><a href="<?php echo BASE_URL . "/admin/view-app.php"; ?>" class="reply">view</a></td>
                                  <td><a href="index.php?id=<?php echo $application['id']; ?>"><i class="fa fa-trash red" aria-hidden="true"></i></a></td>
                               </tr>
                            <?php } ?>
                           
                        </tbody>
                    </table>
                </div>
             </div>
          </div>
        <!--Admin content-->

    </div>
    <!--//Admin-page-wraper-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--custom script-->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>