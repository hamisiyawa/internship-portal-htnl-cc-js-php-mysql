
<?php 
include("path.php");
//include(ROOT_PATH. "/app/database/db.php");
include(ROOT_PATH. "/app/controllers/email-controller.php");
$posts = array();
$postsTitle = 'Available Interships';

if(isset($_GET['token'])){
   $token = $_GET['token'];
   resetPassword($token);
}

if(isset($_POST['search-term'])){
   $postsTitle = "You searched for '" . $_POST['search-term'] ."'";
   $posts = searchPosts($_POST['search-term']);
   //dd($posts);
}else{
   $posts = selectAll('posts', ['end_date' > 'start_date']);
}

?>
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
    <title>Intern</title>

</head>
<body>
   <!--include header-->
    <?php include(ROOT_PATH. "/app/includes/header.php"); ?>
   <!--//include header-->
  
 
  <!--flash messages-->
  <?php include(ROOT_PATH. "/app/includes/messages.php"); ?>
  <!--//include header-->
   <!--flash messages-->
    <div class="page-wrapper">
      <!--post-slider-->
      <div class="post-slider clearfix">
         <h1 class="slider-title">Find Internship Of Your Choice</h1>
          <i class="fas fa-chevron-left prev"></i>
          <i class="fas fa-chevron-right next"></i>
           <div class="post-wrapper">
              <div class="post">
                 <img src="assets/images/image8.jpg" alt="" class="slider-image">
              </div>
              <div class="post">
                 <img src="assets/images/image1.jpg" alt="" class="slider-image">
              </div>
              <div class="post">
                 <img src="assets/images/image2.jpg" alt="" class="slider-image">
              </div>
              <div class="post">
                 <img src="assets/images/image3.jpg" alt="" class="slider-image">
              </div>
              <div class="post">
                 <img src="assets/images/image4.jpg" alt="" class="slider-image">
              </div>
           </div>
      </div>
      <!--//post-slider-->
      <!--Content-->
      <div class="content clearfix">
         <!--main-content-->
         <div class="main-content">
        
            <div class="search">
              <h1 class="recent-internships"><?php echo $postsTitle; ?></h1>
               <form action="index.php" method="post">
                  <input type="text" name="search-term" class="text-input" placeholder="search...">
               </form>
            </div>

            <?php foreach($posts as $post){ ?>
               <div class="post clearfix">
                   <h4><strong>Employer:</strong><?php echo $post['employer']; ?></h4>
                   <h4><strong>Title:</strong><?php echo $post['title']; ?></h4>
                   <p><strong>Description:</strong><?php echo html_entity_decode($post['description']); ?></p>
                   <p><strong>Stipend: Ksh.</strong><?php echo $post['stipend']; ?></p>
                   <p><strong>Start Date:</strong><?php echo $post['start_date']; ?></p>
                   <p><strong>End Date:</strong><?php echo $post['end_date']; ?></p>
                   <a href="<?php echo BASE_URL. "/application.php" ?>" class="btn apply">Apply</a>
              </div>
            <?php } ?> 
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

    <!--slick-carosel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>