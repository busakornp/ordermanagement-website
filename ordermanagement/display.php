<?php
include('header.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<style>

</style>

<body>

<div class="flat-table flat-table-1">

    <table class="flat-table flat-table-1">
        <thead>
        <tr>
            <th scope="col">Order ID</th>
            <th scope="col">Date</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Status</th>
            <th scope="col">Number of Items</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $sql="Select * from `order`";
        $result=mysqli_query($con,$sql);
        if ($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['order_id'];
                $date=$row['date'];
                $name=$row['customer_name'];
                $status=$row['status'];
                $item=$row['items'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$date.'</td>
                <td>'.$name.'</td>
                <td>'.$status.'</td>
                <td>'.$item.'</td>
                <td>
                <button><a href="update.php?updateid='.$id.'">Update</a></button>
                <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                </td>
            </tr>';
            }
        }
        ?>

        </tbody>

    </table>
    <button type="button" style="float: right" class="btn btn-dark" data-toggle="modal" data-target="#completeModal">
        Add new orders
    </button>

</br>
    </br>
    </br></br></br>
    </br>


</div>




</body>

</html>
