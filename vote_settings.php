<?php
require_once ('config/db.php');

$sql = 'SELECT * FROM votesettings WHERE id="1"';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//initialize variables
echo json_encode($row);

?>
