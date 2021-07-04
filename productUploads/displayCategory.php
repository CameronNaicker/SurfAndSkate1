<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Product Collection</title>
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styles.css"/>

</head>

<style>
td,th{
  border: 1px solid black;
  text-align: left;
  padding: 8px;
  font: bold;
  background-color: lightblue;
width:40%;
}


input{
    font-family: 'Merriweather', serif;
          width: 50%;
          padding: 14px 20px;
          margin: 8px 0;
                       
}

}
body{

font-family: 'impact',serif;
  border-collapse: collapse;
  width: 100%;
  font: bolder;


}
label{
    font: bold;
}
</style>
<body background="./SSF-2.jpg"
> 
    
<center>
<form action="" method="post" enctype="mulipart/form-data">

<table border="1" id="t1">
<tr>
    
        <th><label>Product</label> </th>
        <th><label>Description</label></th>
        <th><label>Price</label></th>

        </tr>


<?php

$connection=mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'SurfAndSkate1');

$query = "SELECT * FROM products ORDER BY id ASC";
$result=mysqli_query($connection, $query); 

while($row= mysqli_fetch_array($result)){

?>

<tr>

<td>
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['productImg']).'"/>';?>
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

<br>
<input type="button" value="Back to Home Page" onclick="history.back()">

</center>


</body>
</html>