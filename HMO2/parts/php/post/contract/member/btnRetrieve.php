<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblmembertransaction SET status = '$status' WHERE memberTransID = '$id'");


?>
