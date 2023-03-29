<?php

session_start();
require('connect.php');


//creating reusable functions

//function to print value on the screen
//to be deleted
function dd($value){
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt ->execute();
    return $stmt;
}

//Select all function

function selectAll($table, $conditions = []){
    global $conn;

    $sql = "select * from $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt ->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }else{
        //return records that match condition
       // $sql = "select * from $table where username = 'hamisi' and admin = 1";
       $i = 0;
       foreach($conditions as $key => $value){
           if($i === 0){
            //if condition is one
            $sql = $sql . " where $key=?";
           }else{
               //conditions after the first one
               $sql = $sql . " and $key=?";
            }
          $i++;
       }
       //bind parameter
       $stmt = executeQuery($sql, $conditions);
       $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
       return $records;
    }
  
}

//select one function
function selectOne($table, $conditions){
    global $conn;

    $sql = "select * from $table";
   
     // $sql = "select * from $table where username = 'hamisi' and admin = 1";
    $i = 0;
    foreach($conditions as $key => $value){
        if($i === 0){
            //if condition is one
            $sql = $sql . " where $key=?";
        }else{
            //conditions after the first one
            $sql = $sql . " and $key=?";
        }
        $i++;
    }
    //bind parameter
    //stop looping through the records when the condition is achieved
    // $sql = "select * from $table where username = 'hamisi' and admin = 1 limit 1";
    $sql = $sql . " limit 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records; 
}

//create function
function create($table, $data){
    global $conn;
   //$sql = "insert into users (admin, name, username, email, password) values(?, ?, ?, ?, ?)"; or
   // $sql = "insert into users set admin=?, name=?, username=?, email=?, password=?;
    $sql = "insert into $table set ";

    $i = 0;
    foreach($data as $key => $value){
        if($i === 0){
            //if condition is one
            $sql = $sql . " $key=?";
        }else{
            //conditions after the first one
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

//execute the query
$stmt = executeQuery($sql, $data);
$id = $stmt->insert_id;
return $id;

}

//update function
function update($table, $id, $data){
    global $conn;
   // $sql = "update users set admin=?, name=?, username=?, email=?, password=? where id=?;
    $sql = "update $table set ";

    $i = 0;
    foreach($data as $key => $value){
        if($i === 0){
            //if condition is one
            $sql = $sql . " $key=?";
        }else{
            //conditions after the first one
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

//execute the query
$sql = $sql . " where id=?";
$data ['id'] = $id;
$stmt = executeQuery($sql, $data);
$id = $stmt->insert_id;
return $stmt->affected_rows;
}

//delete function
function delete($table, $id){
    global $conn;
    $sql = "delete from $table where id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}


//examine the conditions

/*$data = [
    'admin' => 1,
    'name'  => 'jacob',
    'username' => 'jacobSteve',
    'email' => 'jacob@gmail.com',
    'password' => 'jacob'
];*/

//implementing search

function searchPosts($term){
    $march = '%' . $term . '%';
    global $conn;
    $sql = "select * from posts where end_date > ? and employer like ? or title like ? or description like ?";
    $stmt = executeQuery($sql, ['end_date' > 'start_date','employer' => $march, 'title' => $march, 'description' => $march]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
