<?php
@include 'config.php';
$id = $_GET['edit'];
if(isset($_POST['update_product'])){
   //$product_name = $_POST['product_name'];
   //$product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;
   if(empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{
      $update_data = "UPDATE designs SET  image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin1.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>
<div class="container">
<div class="admin-product-form-container centered">
   <?php 
      $result = mysqli_query($conn, "SELECT * FROM designs");
      while($row = mysqli_fetch_assoc($result)){
   ?>  
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
           <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg ,image/jfif">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="admin.php" class="btn">go back!</a>
   </form>
      <?php }; ?>
  </div>
</div>
</body>
</html>