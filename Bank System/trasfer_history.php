<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trasfer history</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    require"connect.php";
?>
    <!-- start -->
    <?php
require "nav.php";
?>
<!-- end -->
    <!-- form start -->
    <div class="container">
        <h1 class="text-success text-center">Specific Customer history of transfer</h1>
        <form method="POST" action="trasfer_history.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Enter sendrs Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter sendrs Name</label>
                <input type="password" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- form end -->
        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $sql = "SELECT * FROM transfer_money WHERE sendrs_email='$email' AND senders_name='$name'";
    
    // Execute the query
    $result = mysqli_query($con, $sql);
    if (!$result) {
        die('Error: ' . mysqli_error($con));
    }

    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $i = 1;
        echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Senders Name</th>
                    <th scope="col">Senders Email</th>
                    <th scope="col">Receivers Email</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <th scope='row'>$i</th>
                <td>{$row['senders_name']}</td>
                <td>{$row['sendrs_email']}</td>
                <td>{$row['recivers_email']}</td>
                <td>{$row['amount']}</td>
                </tr>";
            $i++;
        }

        echo '</tbody></table>';
    } else {
        echo "Data not found";
    }

    // Close the database connection
    mysqli_close($con);
}
?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>