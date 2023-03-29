<?php



function validateUser($user){
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    $errors = array();
    if(empty($user['name'])){
        array_push($errors, 'Name is requred');
    }

    if(empty($user['username'])){
        array_push($errors, 'Username is requred');
    }

    if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL)){
        array_push($errors, 'Invalid email');
    }

    if(empty($user['email'])){
        array_push($errors, 'Email is requred');
    }

    if(empty($user['password'])){
        array_push($errors, 'Password is requred');
    }

    if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        array_push($errors,"Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.");
    }
    
    if(($user['passwordConf']) !== $_POST['password']){
        array_push($errors, 'Password do not match');
    }

   //$existingUser = selectOne('users', ['email' => $user['email']]);
  //  if(isset($existingUser)){
   //     array_push($errors, 'Email already exists');
   // } 

   $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser){
        //check if update intern batton is clicked and the updated title is not equal to a title in the database
        if(isset($user['update-user']) && $existingUser['id'] != $user['id']){
            array_push($errors, 'email already exists');
        }
        
        if(isset($user['create-admin'])){
            array_push($errors, 'email already exists');
        }
    }

    return $errors;
}

function validateLogin($user){


    $errors = array();

    if(empty($user['username'])){
        array_push($errors, 'Username is requred');
    }

    if(empty($user['password'])){
        array_push($errors, 'Password is requred');
    }

    return $errors;
}

