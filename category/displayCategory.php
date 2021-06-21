<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>displaying Products</title>
</head>
<body>
    
<center>
<form action="" method="post" enctype="mulipart/form-data">

<table>
<thead>
    <tr>
        <th>Product</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
</thead>

<?php

$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'SurfAndSkate1');

$query = "SELECT * FROM products ORDER BY id DESC";
$query_run=mysqli_query($connection, $query) or die(mysqli_error($connection));

while($row= mysqli_fetch_array($query_run)){

    ?>

<tr>
    <td><?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['productImg']).'style="width:100px; height:100px;">'; ?>

</td>
<td>
    <?php echo $row['productDescr'];?>
</td>
<td>
    <?php echo $row['productPrice'];?>
</td>
</tr>


    <?php


}

?>

</table>
</form>

</center>
</body>
</html>