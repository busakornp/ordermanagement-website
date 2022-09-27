<?php 

include 'database_connection.php';

$sql = "SELECT * FROM task";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>


<li>
    <span class="text" display="block"><?php echo $row['title']; ?></span>
    <i id="removeBtn" class="icon fa fa-trash" display="block" data-id="<?php echo $row['id']; ?>"></i>

</li>

<?php
    }

    echo '<div class="pending-text" >You have ' . mysqli_num_rows($result) . ' pending tasks.</div>';
} else {
    echo "<li><span class='text'>No Record Found.</span></li>";
}

?>