<?php 
include_once('config.php');
$query="SELECT * from cse417";
$result=mysqli_query($conn,$query);
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  
</head>
<body>
    <div class="container fluid mt-5"> 
        <div class="d-flex justify-content-center bg-danger mb-5">
    <?php echo "<h1>Welcome ". $_SESSION['username'] . "</h1>"; ?>
    </div>
    
    <table class="table table-bordered table-dark" >
        <tr> 
            <th colspan="4"><h2 class="text-success text-center">Registered Users Information</h2></th>
        </tr>
            <th class="table-primary text-center text-dark">ID</th>
            <th class="table-info text-center text-dark">Username</th>
            <th class="table-warning text-center text-dark">Email</th>
            <th class="table-light text-center text-dark">Password</th>
        </t>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td class="table-primary text-center text-dark"><?php echo $rows['id']?></td>
                    <td class="table-info text-center text-dark"><?php echo $rows['username']?></td>
                    <td class="table-warning text-center text-dark"><?php echo $rows['email']?></td>
                    <td class="table-light text-center text-dark"><?php echo $rows['password']?></td>
                </tr>
        <?php
             }
        ?>
    </table>
    <br>
    <button type="button" class="btn btn-primary btn-lg btn-block "><a href="logout.php"><p class="text-dark mt-2 font-weight-bold">LOGOUT</p></a> </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>