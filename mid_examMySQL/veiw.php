<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
require "db.php";
if(isset($_POST['cv'])){
    $q = "create or replace view product_gt_5000 as select * from products where price>5000";
    $conn->query($q);
    echo "<h3>View Created</h3>";
}
    ?>
    <form action="" method="post">
        <input type="submit" value="Create View" name="cv">
    </form>
    <form action="" method="post">
    <input type="submit" value="Show Products From View" name="sv">
    </form>
    <?php
if(isset($_POST['sv'])){
    $q = "select * from product_gt_5000";
    $r = $conn->query($q);
    while($row = $r->fetch_assoc()){
        
        echo "ID:" . $row['id']."<br>";
        echo "Name:" . $row['name']."<br>";
        echo "Price:" . $row['price']."<br>";
        echo "Manufacturer ID:" . $row['manid']."<br>"."<br>";
       
    }
    
}
    ?>
</body>
</html>