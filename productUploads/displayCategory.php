<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Product Collection</title>
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styles.css"/>

</head>

<style>

body{

background-color:lightblue;   
}

input{
    font-family: 'Merriweather', serif;
}

}
table{

font-family: 'impact',serif;

}

</style>
<body> 
    
<center>
<form action="" method="post" enctype="mulipart/form-data">

<table border="1">

    
        <th><label>Product</label> </th>
        <th><label>Description</label></th>
        <th><label>Price</label></th>




<?php

$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'SurfAndSkate1');

$query = "SELECT * FROM products ORDER BY id ASC";
$result=mysqli_query($connection, $query); 

while($row= mysqli_fetch_array($result)){

?>

<tr>
<td>
<tr>
<td>
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['productImg']).'"/>';?>
</td>
</tr>


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