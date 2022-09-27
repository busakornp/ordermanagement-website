<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
require('database_connection.php');
session_start();
$message="";
if(isset($_SESSION['type']))
{
    header("location:index.php");
}
if(count($_POST)>0) {
if(isset($_POST['username'])){
    //remove backslashes
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    //checking if user existing in the db

    $query = "SElECT * FROM user_details WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);

    if($rows == 1){
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }else{
        echo "<div class = 'form'>
        <h3>Username/Password is incorrect.</h3>
        <br>Click here to <a href ='login.php'>Login again</a>
        </div>
        ";
    }
    }}else{
?>
    <canvas id="Canvas" width="1200" height="140";>
    </canvas>

    <script>
        var canvas = document.getElementById("Canvas");
        var ctx = canvas.getContext("2d");
        ctx.font = "bold 20px Montserrat";
        ctx.fillStyle="black";
        ctx.fillText("Welcome to",450,60);
        ctx.fillText("Order Management",500,90);
        ctx.fillText("System",660,120);
    </script>

    <div class = 'form'>
        <h2> Login</h2>
        <form action="" method="post" name="login">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Log in" required>
        </form>
    </div>


<?php }?>

</body>
</html>
