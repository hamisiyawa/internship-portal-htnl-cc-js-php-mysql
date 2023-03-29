<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';
$posts = selectAll($table);
$errors = array();

$id = '';
$employer = '';
$title = '';
$description = '';
$stipend = '';
$start_date = '';
$end_date = '';

//get the id of the post from url
if(isset($_GET['id'])){
   $post = selectOne($table, ['id' => $_GET['id']]);
   $id = $post['id'];
   $employer = $post['employer'];
   $title = $post['title'];
   $description = $post['description'];
   $stipend = $post['stipend'];
   $start_date = $post['start_date'];
   $end_date = $post['end_date'];
}

if(isset($_GET['delete_id'])){
   $count = delete($table, $_GET['delete_id'] );

   $_SESSION['message'] = "post deleted successfuly";
   $_SESSION['type'] = "success";
   header("location: " . BASE_URL . "/admin/topics/index.php");
   exit();
}

if(isset($_POST['add-intern'])){

    //validation
    $errors = validatePost($_POST);
    if(count($errors) == 0){
        unset($_POST['add-intern']);
        
        //remove the tags in the database
        $_POST['description'] = htmlentities($_POST['description']);
        $post_id = create($table, $_POST);

        //session to desplay success message
        $_SESSION['message'] = "post created successfuly";
        $_SESSION['type'] = "success";
        //dd($post_id);
        //redirect to manage internships page
        header("location: " . BASE_URL . "/admin/topics/index.php");
        exit();
    }else{
        $employer = $_POST['employer'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stipend = $_POST['stipend'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
    }
    
}


if(isset($_POST['update-intern'])){
    //validation
    $errors = validatePost($_POST);

    if(count($errors) == 0){
        $id = $_POST['id'];
        unset($_POST['update-intern'] ,$_POST['id'] );
        //remove the tags in the database
        $_POST['description'] = htmlentities($_POST['description']);
        $post_id = update($table, $id, $_POST);

        //session to desplay success message
        $_SESSION['message'] = "post updated successfuly";
        $_SESSION['type'] = "success";
        //dd($post_id);
        //redirect to manage internships page
        header("location: " . BASE_URL . "/admin/topics/index.php");
        exit();
    }else{
        $employer = $_POST['employer'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stipend = $_POST['stipend'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
    }


}


