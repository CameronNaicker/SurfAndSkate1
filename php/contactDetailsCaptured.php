<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="SurfAndSkate1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//checking connection
if(!$conn){

die("Connection Failed" .mysqli_connect_error());

}
if(isset($_POST['save'])){

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $emailAddress=$_POST['emailAddress'];
    $comments=$_POST['comments'];

    $sql_query = "INSERT INTO contactFormDetails (first_name,last_name,emailAddress,comments)
    VALUES ('$first_name','$last_name','$emailAddress','$comments')";

    if(mysqli_query($conn,$sql_query)){
        
        echo '<script type="text/javascript"> alert ("Contact Sheet Submitted, please click the go back button to view the contacts page!")</script>';



    }else{
echo "Error" .$sql ."". mysqli_error($conn);



    }
    mysqli_close($conn);

}
?>
<html>
    <style>
            #button{
        width: 40%;
padding: 14px 20px;
margin: 8px 0;
background-color:lightblue;
    }
    </style>
    <body background="./skateboard-background1.jpg">
        
    <input type="button"  id="button" value="Go back to Contacts Page!"  onclick="history.back()">

    </body>

</html>

