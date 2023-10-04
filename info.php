<?php

include_once("./vendor/connect.php");
$sql = "SELECT * FROM `bd_connect`";

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$status = $_POST['status'];

empty($id);
if(empty($id) || empty($password)){
    echo 'мяумяу';
    echo $id;
}

if(isset($_POST['sumbit'])){
  
    $status = $_POST['status'];
    $query = "UPDATE 'bd_connect' set status = $status WHERE bd_connect.id= $id";
    $data = mysqli_query($connect, $sql);
    if($data)
    {
       
    }
}



?>