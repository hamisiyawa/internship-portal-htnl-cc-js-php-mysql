<?php 
include(ROOT_PATH. "/app/database/db.php");
include(ROOT_PATH. "/app/helpers/validateUser.php");


$table = 'users';

$errors = array();
$id = '';
$name = '';
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$admin = '';

//update admin users
$admin_users = selectAll($table, ['admin' => 1]);



function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';
    //redirect to home page or dashbord

    if($_SESSION['admin']){
     header('location: '. BASE_URL. '/admin/dashboard.php');
    }else{
     header('location: '. BASE_URL. '/index.php');
    }
    exit();
}

if(isset($_POST['register-btn']) || isset($_POST['create-admin'])){

    //form validation
     $errors = validateUser($_POST);
    

    if(count($errors) === 0){
        $token = $_POST['token'];
        unset($_POST['passwordConf'],$_POST['type'] ,$_POST['register-btn'], $_POST['create-admin']);
        $_POST['token'] = bin2hex(random_bytes(50));
   
        //encrypt password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
       

         if(isset($_POST['admin'])){
              $_POST['admin'] = 1;
              //save data to database
              $user_id = create($table, $_POST);
              $_SESSION['message'] = 'Admin user created successfuly';
              $_SESSION['type'] = 'success';
              header('location: '. BASE_URL. '/admin/users/index.php');
              exit();
         }else{
            $_POST['admin'] = 0;
            //save data to database
            $user_id = create($table, $_POST);
            $user = selectOne($table,['id' => $user_id]);
            // dd($user);
            //log users in
            loginUser($user);
         }
        
    }else{

        //maintain the values on the form
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }

 }

 //edit admin user
 if(isset($_POST['update-user'])){
    $errors = validateUser($_POST);

    if(count($errors) === 0){
        $id = $_POST['id'];
        unset($_POST['passwordConf'],$_POST['type'] ,$_POST['update-user'], $_POST['id']);

        //encrypt password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        //save data to database
        $count = update($table, $id ,$_POST);
        $_SESSION['message'] = 'Admin user updated successfuly';
        $_SESSION['type'] = 'success';
        header('location: '. BASE_URL. '/admin/users/index.php');
        exit();
        
        
    }else{

        //maintain the values on the form
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
 }

 if(isset($_GET['id'])){
     $user = selectOne($table, ['id' => $_GET['id']]);

     $id = $user['id'];
     $name = $user['name'];
     $username = $user['username'];
     $email = $user['email'];
     $admin = isset($user['admin']) ? 1 : 0;
 }

 if(isset($_POST['login-btn'])){
    //form validation
    $errors = validateLogin($_POST);

    if(count($errors) === 0){
        $user = selectOne($table, ['username' => $_POST['username']]);

        if($user && password_verify($_POST['password'], $user['password'])){

            //login, redirect
            loginUser($user);
        }else{
            array_push($errors, 'Wrong credentials');
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
 }

 //delete admin user
 if(isset($_GET['delete_id'])){
     $count =delete($table, $_GET['delete_id']);
     $_SESSION['message'] = 'Admin user deleted';
     $_SESSION['type'] = 'success';
     header('location: '. BASE_URL. '/admin/users/index.php');
     exit();
 }


 // if user clicks on the forgot password button
if(isset($_POST['forgot-password'])){
    
    $email = $_POST['email'];
   
   
    
    if(count($errors) == 0){
        $sql = "select * from users where email='$email' limit 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $token = $user['token'];
        sendPasswordResetLink($email, $token);
        header('location: password-message.php');
        exit(0);
    }
}

//if user clicks on the reset password button
if(isset($_POST['reset-password-btn'])){
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

  
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_SESSION['email'];
    if(count($errors) == 0){
        $sql = "update users set password='$password' where email='$email'";
        $result = mysqli_query($conn, $sql);

        if($result){
            //redirect to login page
            header("location: login.php");
            exit(0);
        }
    }

}

