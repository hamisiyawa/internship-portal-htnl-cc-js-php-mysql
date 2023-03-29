<?php 

function validatePost($post){


    $errors = array();
    if(empty($post['employer'])){
        array_push($errors, 'Employer is requred');
    }

    if(empty($post['title'])){
        array_push($errors, 'Title is requred');
    }

    if(empty($post['description'])){
        array_push($errors, 'Description is requred');
    }

    if(empty($post['start_date'])){
        array_push($errors, 'Start date is requred');
    }

    if(($post['end_date']) < $_POST['start_date']){
        array_push($errors, 'Invalid end-date');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if($existingPost){
        //check if update intern batton is clicked and the updated title is not equal to a title in the database
        if(isset($post['update-intern']) && $existingPost['id'] != $post['id']){
            array_push($errors, 'title already exists');
        }
        
        if(isset($post['add-intern'])){
            array_push($errors, 'title already exists');
        }
    }

    return $errors;
}