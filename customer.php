<?php
require "protect.php";
$message='';
if (isset($_POST["names"]))
{
    require "connect.php";
    extract($_POST);
    $query = "insert into customers values(null,'$names','$id','$phone')";
   $result= mysqli_query($conn, $query); //or die(mysqli_error($conn));
   if ($result)
       $message="<h4 class='text-primary'>Custmer $names Registered successfully</h4>";
   else
       $message="<h4 class='text-danger'>$names  already exists</h4>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body {width: 100vh
            height:100%
        }
        .container{height: 100%
            display: flex;
            align-content: center;
            align-items: center;}
        .glyphicon{
            font-size: 80px;
            color: #2b542c;
        }
    </style>
</head>
<body>
<?php require "navbar.php"; ?>
<div class="container">
    <div class="col-sm-4 col col-sm-offset-4">
        <p class="text-center">
            <span class="glyphicon glyphicon-user"></span>
        </p>
        <p class="text-center">Register New Customer</p>
        <?=$message?>
        <form role="form" method="post" action="customer.php">
            <div class="form-group">

                <label for="email">Full Names</label>
                <input type="text" name="names" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">ID Number</label>
                <input type="number" name="id" required class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Phone Number</label>
                <input type="number" name="phone" required class="form-control" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-success btn-block ">Register New Costomer</button>
        </form>
    </div>
</div>
</body>
</html>