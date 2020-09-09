<?php

//headers


header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';

// instatiante DB connect to it

$database = new Database();

$db = $database->connect();


/// instatiate  DB pointofsale bb
$post = new Post($db);

// POS query

$result = $post->read();

// get row count

$num = $result->rowCount();


// check any post 
if($num > 0){

//post arry
$post_arr = array();
$posts_arr['data'] = array();

while($row= $result->fetch(PDO::FETCH_ASSOC)){

extract($row);

$post_item = array(
'reciept_no' => $receipt_no,
'customer_id' => $customer_id,
'username' => $username,
'date' => $date,


);
/// push to data
array_push($posts_arr['data'],$post_item);

}

// turn to JSON
echo json_encode($posts_arr);



}




else {
// no post
echo json_encode(

array('message'=> 'no post found')

);

}