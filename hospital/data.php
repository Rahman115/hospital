<?php
include ('conn.php');

$sql_insert = "INSERT INTO hospital(id, umum, gigi, bedah, paru, obsgyn, anak, saraf, dalam) VALUES ("",'".$umum."', '".$gigi."', '".$bedah."', '".$paru."', '".$obsgyn."', '".$anak."', '".$saraf."', '".$dalam."'");
if(mysqli_query($conn, $sql_insert))
{
echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>