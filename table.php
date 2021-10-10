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
  <div class="container">
   <div class="row  justify-content-center">
    <div class="col-lg-12 ">
      <div class="table-responsive">
       <table class="table-striped text-center table-bordered">
        <thead class="bg-dark text-white">
         <tr>
          <th class=" "> Id </th>
          <th class=" "> Name </th>
          <th class="py-3 "> Category </th>
          <th class="py-3 "> Description </th>
          <th class="py-3 "> Life </th>
          <th class="py-3 "> Image </th>
        </thead>
        <tbody>
          <?php
          include 'dbcon.php';
          $select = "select * from animal";
          $selectquery = mysqli_query($conn, $select);
              //$result = mysqli_fetch_array($selectquery);
          while($result = mysqli_fetch_array($selectquery)) 
          {
            ?>
            <tr>
              <td> <?php echo $result['id'];?></td>
              <td> <?php echo $result['name'];?></td>
              <td> <?php echo $result['cataegory'];?></td>
              <td> <?php echo $result['description'];?></td>
              <td> <?php echo $result['life'];?></td>
              <td> <img src="<?php echo $result['image'];?> " width="100" height="50"></td>
            </tr>
            <?php

          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</body>
</html>