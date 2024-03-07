<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All customer Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
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
        <h1 class="text-success text-center">All Customer Data </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Current Balence</th>
                </tr>
            </thead>
            <tbody>
    <?php
$sql="SELECT * FROM customer";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
    $i=1;
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
}
?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>