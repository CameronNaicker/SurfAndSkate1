<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="shortcut icon" href="./images/icon.ico" type="image/x-icon"/>
<title> 
    Contact Us - Surf and Skate
</title>
<link rel="stylesheet" href="styles.css"/>

<style>

#name{
    font-family: 'Merriweather', serif;
    font-weight:bold;
}

    body{
        background-color: gray;
        background-image:url("./skateboard-background1.jpg");
        
    }

    h1{
        color: black; 
        font-weight:bold;
    }
    #send{
        width: 20%;
padding: 14px 20px;
margin: 8px 0;

    }
    #button{
        font:bold;
        width: 10%;
padding: 14px 20px;
margin: 8px 0;
background-color:orange;
    }

    #F{
        width: 85%;
padding: 14px 20px;
margin: 8px 0;
        background-color:orangered;

    }
    input{
        width: 85%;
padding: 14px 20px;
margin: 8px 0;

    }

    #formT{
        width: 50%;

        background-color: lightblue;
    }

</style>


</head>

<body>
    
    <br>  
<form action="contactDetailsCaptured.php" id="form" method="post">

<table border="1" align="center" id="formT">

<center><h1>Contact Us</h1></center>
   
<tr>
    <td>
<label id="name">Name:</label></td>  
<td><input type="text" name="first_name" placeholder="Name"> </td>
</tr>
<tr>
    <td>
<label id="name">Surname:</label>  
<td><input type="text" name="last_name" placeholder="Surname"></td>
</tr>
<tr>
    <td>
<label id="name">E-Mail:</label>  
<td><input type="email" name="emailAddress" placeholder="example@gmail.com"></td>
</tr>
<tr>
    <td>
<label id="name">Comments:</label>  
<td><textarea name="comments" rows="5" cols="40" placeholder="Comments..."></textarea></td>
</tr>




</table>
<center>
<td><input type="submit" id="send"name="save" value="Submit" id="F"></td>

</center>

<center>
<br>
<input type="button" value="Back to Home" id="button" onclick="history.back()">


</center>
</form>
</body>
</html> 
