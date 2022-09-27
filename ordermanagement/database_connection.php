<?php

$con = mysqli_connect("localhost", "root","","ordermanagement");


if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error;
        }


//    function insert($order_id, $date, $customer_name, $status, $items)
//    {
//        $result = mysqli_query($this->dbcon, "INSERT INTO order_details(order_id, date, customer_name, status, items) VALUES
//        ('$order_id','$date', '$customer_name', '$status', '$items')");
//        return $result;
//    }
//
//    function fetchdata(){
//        $result = mysqli_query($this->dbcon, "SELECT * FROM order_details");
//    }

?>