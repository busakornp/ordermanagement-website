<?php

include('database_connection.php');

if(isset($_POST['submit'])) {
    $order_id = $_POST['orderid'];
    $date = $_POST['orderdate'];
    $customer_name = $_POST['customername'];
    $status = $_POST['orderstatus'];
    $item = $_POST['itemnumber'];

    $sql = "insert into `order` (order_id, date, customer_name, status, items)
    values('$order_id','$date','$customer_name','$status','$item')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo("<script LANGUAGE='JavaScript'>
    window.alert('Data inserted');
    window.location.href='orderdetails.php';
    </script>");

    } else {
        die(mysqli_error($con));
    }
}


include('display.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--JQUERY-->
    <script src="js/jquery-ui.min.js"></script>

</head>
<body>


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="completeModal">Add orders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <form method="post">
                        <div class="form-group">
                            <label>Order ID</label>
                            <input type="text" class="form-control" name="orderid" placeholder="Enter order ID">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" name="orderdate" placeholder="Enter date">
                        </div>
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="customername" placeholder="Enter customer Name">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="orderstatus">
                                <option value="Packing">Packing</option>
                                <option value="Awaiting_for_Dispatch">Awaiting_for_Dispatch</option>
                                <option value="Dispatched">Dispatched</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Number of Items</label>
                            <input type="number" class="form-control"  name="itemnumber" placeholder="Enter number of Items">
                        </div>

                        <button type="submit" class="btn btn-primary" name ="submit">Save changes</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

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



