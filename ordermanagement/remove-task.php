<?php 

include 'database_connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM task WHERE id='$id'";
$result = mysqli_query($con, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>