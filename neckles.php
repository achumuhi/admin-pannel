<?php 
	@include "conn.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>product page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"  href="d1.css">
</head>
<body>

<div class="container">
  <div class="row">
			<h1>Neckles</h1><hr>
			<?php 
			$sql="select * from neckles";
			$res=$conn->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
           
            <div class="col-lg-4 col-md-6">
            <hr class="w-25 mx-auto bg-primary">
         <img src="images/'. $row['image'] .'" alt="" class="img-responsive" >
        
   
   </div>
   ';
				}
			}
			?>
  </div>
</div>
</body>
</html>