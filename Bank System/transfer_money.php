<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transfer money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require"connect.php";
?>
    <!-- this is nav bar code   -->
       <!-- start -->
  <?php
require "nav.php";
?>
<!-- end -->
    <div class="container">
        <h1 class="text-success text-center">Money Transfer</h1>
        <!-- senders form start -->
        <form action="transfer_money.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Enter your Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="semail">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Enter your Name</label>
                <input type="password" class="form-control" id="name" name="sname">
            </div>

            <!-- senders form end -->
            <!-- recivers form start -->

            <div class="mb-3">
                <label for="email" class="form-label">Recivers Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="remail">

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Enter Recivers name</label>
                <input type="password" class="form-control" id="name" name="rname">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Enter Amount</label>
                <input type="text" class="form-control" id="amount" name="amount">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- recivers form start -->
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $semail=$_POST['semail'];
        $sname=$_POST['sname'];
        $remail=$_POST['remail'];
        $rname=$_POST['rname'];
        $amount=$_POST['amount'];
        $sql2="SELECT * FROM customer WHERE name='$sname' and email='$semail';" ;
        $result2=mysqli_query($con,$sql2);
        $num=mysqli_num_rows($result2);
        $sql3="SELECT * FROM customer WHERE name='$rname' and email='$remail';" ;
        $result3=mysqli_query($con,$sql3);
        $num1=mysqli_num_rows($result3);
        if($num>0 && $num1>0)
        {

// check senders money money
$sql_check_money="SELECT current_balence FROM customer WHERE name='$sname' AND email='$semail';";
$result_check_money=(mysqli_query($con,$sql_check_money));
$row1=mysqli_fetch_assoc($result_check_money);
$money1=$row1['current_balence'];

if($money1<$amount)
{
    echo'
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Your bank balence is low</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else
{


            $sql="UPDATE customer SET current_balence=current_balence+ $amount WHERE name='$rname' and email='$remail';";
            $result=mysqli_query($con,$sql);
            $sql1="UPDATE customer SET current_balence=current_balence- $amount WHERE name='$sname' and email='$semail';";
            $result1=mysqli_query($con,$sql1);
            echo'
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Money Transfer successfuly!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          $sqlinsert="INSERT INTO `transfer_money` (`senders_name`, `recivers_email`, `recivers_name`, `sendrs_email`, `amount`) VALUES ('$sname', '$remail', '$rname', '$semail', '$amount');";
          $resultinsert=mysqli_query($con,$sqlinsert);

        }
    }
    else{
        echo'
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Something wrong in sentred data try again</strong> You should check in on some of those fields below.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>