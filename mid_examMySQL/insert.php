<?php

require "db.php";
if(isset($_POST['add'])){
    $q = "call manufact('".$_POST['name']."','".$_POST['address']."','".$_POST['contact']."')";
    $conn->query($q);
    $message = "Manufacturer Created!!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $message??''; ?></h3>
<form action="#" method="POST">    

Name:<input type="text" name="name" id="name"/> <br><br>
Address:<input type="text" name="address" id="address"/><br><br>
Contact_no:<input type="text" name="contact" id="contact"/><br><br>
<input type="submit" name="add" value="Add">
  

</form>
</body>
</html>
