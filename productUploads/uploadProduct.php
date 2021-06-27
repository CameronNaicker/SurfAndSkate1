<!DOCTYPE html>
<html lang="en">
<head>

    <title>Upload products</title>

    <style>

        body{

            background-image:url("./vector-seamless-pattern-doodle-skate-surf-hand-drawn-sketch-summer-beach-skateboard-isolated-white-background-185534361.jpg");
        }

        input{
            font-family:'impact', serif;
            width: 50%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px;

            font-weight: bold;

        }
        label{
            font-family:'Merriweather',serif;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <center>

    <h1>Upload Products into the Company Database</h1>

<form action="" method="post" enctype="multipart/form-data">


<label>Choose Product Image</label> <br>
<input type="file" name="productImg" id="productImg"/><br>

<label>Produt Description</label> <br>
<input type="text" name="productDescr" placeholder="Enter product description"/><br>

<label> Product Price</label> <br>
<input type="text" name="productPrice" id="productPrice" placeholder="Enter price of product"/><br>

<label> Product Code</label> <br>
<input type="text" name="code" id="code" placeholder="Enter code of product"/><br>

<input type="submit" name="upload" value="Upload"/> <br>


</form>

    </center>
</body>
</html>

<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'SurfAndSkate1');

if (isset($_POST['upload'])) {

    $file = addslashes(file_get_contents($_FILES["productImg"]["tmp_name"]));
    $productDescr=$_POST ['productDescr'];
    $productPrice=$_POST['productPrice'];
    $code=$_POST['code'];

    $query="INSERT INTO products(productImg,productDescr,productPrice,code) VALUES ('$file','$productDescr','$productPrice','$code')";
    $query_run = mysqli_query($connection,$query);


    if ($query_run) {
        echo '<script type="text/javascript"> alert ("Product uploaded")</script>';
    }else{

        echo '<script type="text/javascript"> alert ("Image product NOT uploaded")</script>';

    }
}




?>