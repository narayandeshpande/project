<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view one customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- start -->
  <?php
require "nav.php";
?>
<!-- end -->
<!-- form start -->
<div class="container">
    <h1 class="text-success text-center">Specific Customer Data</h1>
<form method="POST" action="one_customer.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="password" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- form end -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['email'];
    $name=$_POST['name'];
  $sql="SELECT * FROM customer WHERE email='$email' AND name='$name'";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  if($num>0)
  {
      $i=1;
      echo'<table class="table">
      <thead>
          <tr>
              <th scope="col">S.No.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Current Balence</th>
          </tr>
      </thead>
      <tbody>';
      while($row=mysqli_fetch_assoc($result))
      {
        echo"<tr>
        <th scope='row'>". $i ."</th>
        <td>". $row['name'] ."</td>
        <td>". $row['email'] ."</td>
        <td>". $row['current_balence'] ."</td>
        </tr>";
        echo"<br>";
        $i++;
      }
      echo'      </tbody>
      </table>';
  }
  else{
    echo"Data not found";
  }
}
?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>