<?php
include 'database_connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from `order` where order_id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='orderdetails.php';
    </script>");

    } else {
        die(mysqli_error($con));

    }

}
include('footer.php');
?>

