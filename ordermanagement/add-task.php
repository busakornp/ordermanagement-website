<?php 

include 'database_connection.php';

$task = $_POST['task'];

$sql = "INSERT INTO task (title) VALUES ('$task')";
$result = mysqli_query($con, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>