<?php

$connect=mysqli_connect("localhost","root","","SurfAndSkate1");

if(isset($_POST["insert"])){

    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query="INSERT INTO test(name) VALUES ('$file')";
    if (mysqli_query($connect,$query)) {
        
        echo '<script>alert("Image inserted")</script';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    
<br/> <br/>

<div class="container" style="width: 500px;">
<h3 align="center">Insert and Displaying products REST TBD</h3>
<br/>

<form method="post" enctype="multipart/form-data">

<input type="file" name="image" id="image"/>

<br/>
<input type="submit" name="insert" id="insert" value="insert" class="btn">
</form>
<br/>
<br/>

<table class="table table-bordered" border="1";>
    <tr>

    <th>Image</th>
</tr>

<?php
$query="SELECT * FROM test ORDER BY id DESC";
$result=mysqli_query($connect,$query);
while ($row=mysqli_fetch_array($result))
{

echo '
<tr>

<td>

<img src="data:image/jpeg;base64,'.base64_encode($row['name']).'"/>


</td>

</tr>
';

}
?>

</table>
</div>

</body>
</html>

<script>

    $(document).ready(function(){

        $('#insert').clicl(funtion(){
            var image_name = $('image').val();

            if(image_name==''){
                alert ("please select image");
                return false;

            }
            else{
                var extension=$('#image').val().split('.').pop().toLowerCase();

                if (jQuery.inArray(extension, ['gif','png','jpg','jpeg'])== -1) {

                    alert ('invalid image file');
                    $('#image').val('');
                    return false;
                    
                }
            }

        });

    });
    </script>