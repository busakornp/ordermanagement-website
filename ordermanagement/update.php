<?php

include('database_connection.php');
$id=$_GET['updateid'];
$sql="Select * from `order` where order_id=$id ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['order_id'];
$date=$row['date'];
$name=$row['customer_name'];
$status=$row['status'];
$item=$row['items'];

if(isset($_POST['submit'])){
    $order_id=$_POST['orderid'];
    $date=$_POST['orderdate'];
    $customer_name=$_POST['customername'];
    $status=$_POST['orderstatus'];
    $item=$_POST['itemnumber'];

    $sql="update `order` set order_id='$order_id', date='$date', customer_name='$customer_name', status='$status', items='$item'
    where order_id=$order_id";
    $result=mysqli_query($con,$sql);

    if($result){
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='orderdetails.php';
    </script>");

    }else{
        die(mysqli_error($con));
    }
}
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>
<body>



<div class="container">
    <form method="post">
        <div class="form-group">
            <br>
            <label>Order ID</label>
            <input type="text" class="form-control" name="orderid" autocomplete="off" value=<?php echo $id;?>>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="orderdate" autocomplete="off" value=<?php echo $date;?>>
        </div>
        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" class="form-control" name="customername" autocomplete="off" value=<?php echo $name;?>>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="orderstatus" class="form-control" autocomplete="off">
                <option value="" selected="selected" disabled selected><?php echo $status;?>
                <option value="Packing">Packing</option>
                <option value="Awaiting_for_Dispatched">Awaiting_for_Dispatched</option>
                <option value="Dispatched">Dispatched</option>
            </select>
        </div>
        <div class="form-group">
            <label>Number of Items</label>
            <input type="number" class="form-control"  name="itemnumber" autocomplete="off" value=<?php echo $item;?>>
        </div>

        <button type="submit" class="btn btn-primary" name ="submit">Update</button>
        <br>
        <br>
        <br>
        <br>
    </form>
</div>
</body>
<?php include('footer.php');
?>
</html>



