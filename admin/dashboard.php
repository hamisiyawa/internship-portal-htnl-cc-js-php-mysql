<?php include("../path.php"); ?>
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
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--admin styling-->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin-dashboard</title>

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
             
           <div class="content block flex">
                 <h2 class="add-intern">Dashboard</h2>
                
            <div class="content-2">
              <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <div class="cards">
                  <div class="card blue">
                    <div class="box">
                        <?php 
                          $dash_users_query = "select * from users";
                          $dash_users_query_run = mysqli_query($conn,  $dash_users_query);
                          if($users_total = mysqli_num_rows( $dash_users_query_run)){
                              echo '<h1>'.$users_total.'</h1>';
                          }else{
                            echo '<h3>No data</h3>';
                          }
                        ?>
                          <h3>Users</h3>
                    </div>
                      <div class="icon-case">
                           <i class="fa fa-users large" aria-hidden="true"></i>
                      </div>
                  </div>

                  <div class="card orange">
                    <div class="box">
                    <?php 
                          $dash_posts_query = "select * from posts";
                          $dash_posts_query_run = mysqli_query($conn,  $dash_posts_query);
                          if($posts_total = mysqli_num_rows( $dash_posts_query_run)){
                              echo '<h1>'.$posts_total.'</h1>';
                          }else{
                            echo '<h3>No data</h3>';
                          }
                        ?>
                      <h3>Internships</h3>
                    </div>
                    <div class="icon-case">
                     <i class="fa fa-upload large" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="card yellow">
                    <div class="box">
                      
                      <?php 
                          $dash_applications_query = "select * from student_applications";
                          $dash_applications_query_run = mysqli_query($conn,  $dash_applications_query);
                          if($applications_total = mysqli_num_rows( $dash_applications_query_run)){
                              echo '<h1>'.$applications_total.'</h1>';
                          }else{
                            echo '<h3>No data</h3>';
                          }
                      ?>
                      <h3>Applications</h3>
                    </div>
                    <div class="icon-case">
                     <i class="fa fa-tasks large" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
                
                <div class="message">
                  <div class="contact-info">
                    <div class="title">
                      <h2>Messages</h2>
                    </div>
                    <table class="t-topic">
                    <thead>
                        <th>SN</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                         <?php foreach($contacts as $key => $contact){ ?>
                           <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $contact['email']; ?></td>
                                <td><?php echo $contact['subject']; ?></td>
                                <td><a href="dashboard.php?id=<?php echo $contact['id']; ?>"><i class="fa fa-trash red" aria-hidden="true"></i></a></td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>
                  </div>
                </div>
              </div>

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
    <script src="../assets/js/scripts.js"></script>
</body>
</html>