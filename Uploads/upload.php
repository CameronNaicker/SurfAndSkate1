<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="SurfAndSkate1";

$conn= new mysqli($server_name,$username,$password,$database_name);

if(isset($_POST['submit'])){

   $fileCount = count($_FILES['file']['name']);
   for($i=0;$i<$fileCount;$i++){
      
      $fileName=$_FILES['file']['name'][$i];
   



$sql = "INSERT INTO products (productImage, productName) VALUES ('$fileName','$fileName')";

if ($conn->query($sql)=== TRUE) {
   echo "File Uploaded Successfully";
}else{

echo "Error has occurred";

}

move_uploaded_file($_FILES['file']['tmp_name'][$i],'//Applications/XAMPP/xamppfiles/htdocs/SurfAndSkate1/images/products/File'.$fileName);


   }
}

?>


<?php

$query = "SELECT * FROM products";
$result=mysqli_query($conn, $query);

if (!$result) {
   printf("Error: %s\n", mysqli_error($conn));
   exit();
}

while ($row=mysqli_fetch_array($result)) {
   
echo '

<tr>

<td>

<img src="data:image/jpeg;base64,'.base64_encode($row['productId']).'"/>


</td>

</tr>

';

}
?>
