<?php
include("./vendor/connect.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>обновление</title>
</head>
<body>
  

 <h3>Обновление пользователя</h3>
  <form action = '/adminPage.php' method='post'>
  <p>бан :
      <input type='text' name='status' required />
      

        <input type="submit" name="sumbit" value='Сохранить'>
<?php

if(isset($_POST['sumbit'])){
  
    $status = $_POST['status'];
    $query = "UPDATE 'bd_connect' set status = '$status' WHERE bd_connect.id=$id";
    $data = mysqli_query($connect, $query);
    if($data)
    {
        echo "";
    }
}

?>


</body>
</html>