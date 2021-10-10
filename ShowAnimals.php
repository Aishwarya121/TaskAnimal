<!DOCTYPE html>
<html>
  <head>
    <title>Enter Animal Details</title>
    <link rel="stylesheet" type="text/css" href="css/.css" />
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" intigrity="sha256-eZrrJcwDc/3uDhsdtsL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  </head>
  <body>
    <a href="table.php" class="btn" style="border: 1px solid red; margin-top: 40px; margin-left:50px; width: 100px; background-color: red; color: white;"> Show </a>
<?php

   include 'dbcon.php';

   if(isset($_POST['submit']))
   {

     $name = $_POST['name'];
     $cataegory = $_POST['cataegory'];
     $image = $_FILES['image'];
     $description = $_POST['description'];
     $life = $_POST['life'];
   
     //fetching image details
    // print_r($image);
     $filename = $image['name'];
     $filepath = $image['tmp_name'];
     $fileerror = $image['error'];
     
     //storing uploaded images in upload folder
     if($fileerror == 0)
     {
       $destfile = 'upload/'.$filename;
       //echo $destfile;
       move_uploaded_file($filepath,$destfile);

       //insetr query
       $insertquery = "insert into animal(name, cataegory, image, description, life) values('$name','$cataegory','$destfile','$description',
       '$life')";
       $query = mysqli_query($conn, $insertquery);
       if($query)
       {
         //echo 'inserted';
       }
       else
       {

       }
     }
     else
      { 
      }

   }
   else
   {
      echo "No button has been clicked";
   }  
?>
 </body>
 </html>