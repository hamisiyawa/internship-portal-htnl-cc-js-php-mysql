<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateContact.php");

$table = 'contact';
$contacts = selectAll($table);

$errors = array();
$id = '';
$name = '';
$email = '';
$subject = '';

if(isset($_POST['contact-btn'])){
    $errors = validateContact($_POST);

    if(count($errors) == 0){
        unset($_POST['contact-btn']);

        $contact_id = create($table, $_POST);
        //dd($contact_id);
        $_SESSION['message'] = "Message sent successfully, We will get back to you in a short time";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/about.php");
        exit();
    }else{
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
    }
    
    
 }

//delete application
if(isset($_GET['id'])){
    $count =delete($table, $_GET['id']);
    $_SESSION['message'] = 'Message deleted';
    $_SESSION['type'] = 'success';
    header('location: '. BASE_URL. '/admin/dashboard.php');
    exit();
}