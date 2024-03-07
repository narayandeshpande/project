<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .box{
        height: 30vh;
        width: 50vw;
        background-color: cadetblue;
        margin:10px;
      }
      button{
        border-radius: 3px;
      }
      .main{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      a{
        text-decoration: none;
      }
      h1{
        color:white;
      }
      @media screen and (max-width: 637px) {
        .main{
        display: flex;
          flex-direction: column;
      }
}
.card{
  margin: 10px;
}
    </style>
  </head>
  <body>
  <!-- this is nav bar code   -->
<!-- start -->
<?php
require "nav.php";
?>
<!-- end -->
<!-- start -->
<div class="container">
  <h1 class="text-success text-center">Bank System</h1>
<h3>About Bank:</h3>  
<p>This is the Bank system web site.</p>
<p>In this web site we can see all custemer data,see specific customer information,money transfer etc.</p>
</div>

<div class="container main">
<div class="card" style="width: 18rem;">
  <img src="bank.jpeg" class="card-img-top" alt="bank logo">
  <div class="card-body">
    <h5 class="card-title">All customer Data</h5>
    <p class="card-text">Click below if you want to check  all customer data</p>
    <a href="all_customers.php" class="btn btn-primary">Click</a>
  </div>

</div>
<div class="card" style="width: 18rem;">
  <img src="bank.jpeg" class="card-img-top" alt="bank logo">
  <div class="card-body">
    <h5 class="card-title">View one customer Data</h5>
    <p class="card-text">Click below if you want to check specific customer data</p>
    <a href="one_customer.php" class="btn btn-primary">Click</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="bank.jpeg" class="card-img-top" alt="bank logo">
  <div class="card-body">
    <h5 class="card-title">Money Transfer</h5>
    <p class="card-text">Click below if you want to Transfer Money</p>
    <a href="transfer_money.php" class="btn btn-primary">Click</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="bank.jpeg" class="card-img-top" alt="bank logo">
  <div class="card-body">
    <h5 class="card-title">See history</h5>
    <p class="card-text">Click below if you want to Transfer history.</p>
    <a href="trasfer_history.php" class="btn btn-primary">Click</a>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>