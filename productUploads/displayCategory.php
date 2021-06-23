<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Product Collection</title>
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon"/>

</head>

<style>

body{

   background-image: url("./vector-seamless-pattern-doodle-skate-surf-hand-drawn-sketch-summer-beach-skateboard-isolated-white-background-185534361.jpg") 
   
}

input{
    font-family: 'Merriweather', serif;
}
</style>
<body> 
    
<center>
<form action="" method="post" enctype="mulipart/form-data">

<table border="1">
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

$query = "SELECT * FROM products ORDER BY id ASC";
$result=mysqli_query($connection, $query); 

while($row= mysqli_fetch_array($result)){

    ?>

<tr>
             <td>



<?php
             echo '

<tr>

<td>

<img src="data:image/jpeg;base64,'.base64_encode($row['productImg']).'"/>


</td>


</tr>

';
?>




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

<br>
<input type="button" value="Go back!" onclick="history.back()">

</center>


</body>
</html>