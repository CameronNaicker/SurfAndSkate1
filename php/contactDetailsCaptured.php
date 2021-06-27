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
        
        echo '<script type="text/javascript"> alert ("Contact Sheet Submitted!")</script>';



    }else{
echo "Error" .$sql ."". mysqli_error($conn);



    }
    mysqli_close($conn);

}
?>
<html>
<input type="button" value="Back to Home Page" onclick="./index.html">

</html>

