<?php
require_once './vendor/connect.php';
$sql = "SELECT * FROM `bd_connect`";
if($result = $connect->query($sql)){
    foreach($result as $row){
    
            
                 echo  "id пользователя: " . $userid = $row["id"];
                 echo   " имя пользователя: " . $username = $row["name"];
                 echo  " почта пользователя: " . $useremail = $row["email"] ;
                 echo  " статус бана: " . $status = $row["status"] ;
                 echo " <a href='update.php?id=" . $row["id"] . '>Изменить</a>';
                 echo"<br>";

    }
  
}
if(isset($_POST['sumbit'])){
  
    $status = $_POST['status'];
    $query = "UPDATE `bd_connect` set status = '$status' WHERE bd_connect.id=$userid";
    $connect->query($query);
}







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
</head>
<body> 
  
    <!-- <P>Вы в админке, здравствуйте моя госпожа</P> -->
</body>
</html>
