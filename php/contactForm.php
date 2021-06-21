<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon"/>
<title> 
    Contact Us - Surf and Skate
</title>
<link rel="stylesheet" href="styles.css"/>
<style>



    body{
        background-color: gray;
        background-image:url("./skateboard-background1.jpg");
    }

    h1{
        color: black; 
    }
</style>


</head>

<body>
    
    <br>  
<form action="contactDetailsCaptured.php" method="post">

<table border="1" align="center">

<center><h1>Contact Us</h1></center>
   
<tr>
    <td>
<label>Name:</label></td>  
<td><input type="text" name="first_name" placeholder="Name"> </td>
</tr>
<tr>
    <td>
<label>Surname:</label>  
<td><input type="text" name="last_name" placeholder="Surname"></td>
</tr>
<tr>
    <td>
<label>E-Mail:</label>  
<td><input type="email" name="emailAddress" placeholder="example@gmail.com"></td>
</tr>
<tr>
    <td>
<label>Comments:</label>  
<td><textarea name="comments" rows="5" cols="40" placeholder="Comments..."></textarea></td>
</tr>
<tr>
    <td><input type="submit" name="save" value="Submit"></td>
</tr>


</table>
<center>

<input type="button" value="Go back!" onclick="history.back()">


</center>
</form>
</body>
</html> 
