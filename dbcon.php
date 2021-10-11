<?php
   
   // Database connection
   $conn = new mysqli('localhost','root','','animalData');
   if($conn){

      //echo "Information successfully...";
   } 
   else 
   {
     echo "$conn->connect_error";
      die("Connection Failed : ". $conn->connect_error);
   }
?>