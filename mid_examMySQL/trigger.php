<?php

require "db.php";
if (isset($_POST['del'])) {
    $q = "delete from manufacturer where id='" . $_POST['manid'] . "'";
    $conn->query($q);
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
    <form action="" method="post">
        <h2>Select For Delete:</h2>
        <hr> 
        <select name="manid" id="">
            <option value="1">manufact_1 </option>
            <option value="2">manufact_2</option>
            <option value="3">manufact_3</option>
            <option value="4">manufact_4</option>
            <option value="5">manufact_5</option>

        </select>
        <input type="submit" value="Delete" name="del">

    </form>

</body>
</html>