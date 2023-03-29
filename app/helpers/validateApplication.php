<?php 

function validateApplication($application){
   

    $errors = array();
    if(empty($application['full_name'])){
        array_push($errors, 'Name is requred');
    }

    if(empty($application['email'])){
        array_push($errors, 'Email is requred');
    }

    if(empty($application['phone_num'])){
        array_push($errors, 'Phone number is requred');
    }

    if(empty($application['employer'])){
        array_push($errors, 'Employer is requred');
    }
    
    if(empty($application['title'])){
        array_push($errors, 'Job title is requred');
    }

    if(empty($application['gender'])){
        array_push($errors, 'Gender is requred');
    }
  
    return $errors;
}