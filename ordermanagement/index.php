<?php
session_start();
include('database_connection.php');
//include('header.php');
//?>
<?php
//if($_SESSION["username"]) {
//?>
<!--    &nbsp&nbsp<span class="badge badge-pill badge-dark mt-4">Welcome --><?php //echo $_SESSION["username"]; ?><!--</span>-->
<!---->
<?php
//}else echo ("<script LANGUAGE='JavaScript'>
//    window.alert('Please Login first');
//    window.location.href='login.php';
//    </script>");
//?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Order</title>

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--JQUERY-->
    <script src="js/jquery-ui.min.js"></script>
</head>
<body>

<!-- Begin Page Content -->

<div class="container-fluid px-0">
    <?php include('header.php');
    ?>
    <?php
    if($_SESSION["username"]) {
        ?>
        &nbsp&nbsp<span class="badge badge-pill badge-dark mt-4">Welcome <?php echo $_SESSION["username"] ; ?></span>
        <?php
    }else echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please Login first');
    window.location.href='login.php';
    </script>");
    ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>

    </div>

    <!-- Content Row -->
    <div class="row justify-content-center">

        <!-- Total num -->
        <div class="col-xl-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number of orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                <?php
                                $sql="Select * from `order` ORDER BY order_id";
                                $result=mysqli_query($con,$sql);

                                $result= mysqli_num_rows($result);
                                echo '<h1>'.$result.'</h1>';


                                ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Packing</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>


                        <?php
                        $status=1;
                        $sql="Select * from `order` where status=$status ";
                        $result=mysqli_query($con,$sql);

                        $result= mysqli_num_rows($result);
                        echo '<h1>'.$result.'</h1>';


                        ?>


                    </div>
                </div>
            </div>
        </div>



        <!-- Awaiting -->
        <div class="col-xl-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Awaiting for Dispatched</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>


                            <?php
                            $status=2;
                            $sql="Select * from `order` where status=$status ";
                            $result=mysqli_query($con,$sql);

                            $result= mysqli_num_rows($result);
                            echo '<h1>'.$result.'</h1>';


                            ?>


                    </div>
                </div>
            </div>
        </div>

        <!-- Dispatched -->
        <div class="col-xl-3">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dispatched</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>


                            <?php
                            $status=3;
                            $sql="Select * from `order` where status=$status ";
                            $result=mysqli_query($con,$sql);

                            $result= mysqli_num_rows($result);
                            echo '<h1>'.$result.'</h1>';


                            ?>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <?php include('Todolist.php'); ?>
        &nbsp
        &nbsp&nbsp

    </div>
    <br/>
    <br/><br/>
    <br/><br/>
    <br/>
</div>


<script>
    $(function() {
        $('.badge').mouseover(function () {
            $('.badge').animate({
                width: '200px', height: '19px'}, 1000);

            $('.badge').animate({
                width: '120px', height: '19px'}, 1000);
        });
    });




</script>




        <!--Bootstrap javascript-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--Ajax-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</body>

<?php include('footer.php');
?>

</html>
