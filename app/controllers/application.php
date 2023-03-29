<?php
//include(ROOT_PATH. "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateApplication.php");
$table = 'student_applications';
$applications = selectAll($table);

$errors = array();
$id = '';
$full_name = '';
$email = '';
$phone_num = '';
$employer = '';
$title = '';
$gender = '';

if(isset($_POST['application'])){
    $errors = validateApplication($_POST);

    if(count($errors) == 0){
        unset($_POST['application']);
    
        $application_id = create($table, $_POST);
        //dd($application_id);
        $_SESSION['message'] = "Hello there! your application has been sent successfully, we will get back to you shortly.";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/app-success.php");
    }else{
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_num = $_POST['phone_num'];
        $employer = $_POST['employer'];
        $title = $_POST['title'];
        $gender = $_POST['gender'];

    }
   

 }

 if(isset($_GET['id'])){
    $application = selectOne($table, ['id' => $_GET['id']]);
    $id = $application['id'];
    $full_name = $application['full_name'];
    $email = $application['email'];
    $phone_num = $application['phone_num'];
    $employer = $application['employer'];
    $title = $application['title'];
    $gender = $application['gender'];
 }

 //delete application
 if(isset($_GET['id'])){
    $count =delete($table, $_GET['id']);
    $_SESSION['message'] = 'application deleted';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL. '/admin/posts/index.php');
    exit();
}

