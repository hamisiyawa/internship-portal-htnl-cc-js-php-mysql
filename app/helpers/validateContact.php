<?php 

function validateContact($contact){
   

    $errors = array();
    if(empty($contact['name'])){
        array_push($errors, 'Name is requred');
    }

    if(empty($contact['email'])){
        array_push($errors, 'Email is requred');
    }

    if(empty($contact['subject'])){
        array_push($errors, 'subject is requred');
    }
  
    return $errors;
}