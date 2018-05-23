<?php

$notification = mysqli_query($con, "SELECT * FROM tblcompanymaintenance WHERE status = 'Active'");
while ($row = mysqli_fetch_array($notification)) {
  $days = $row['companyNotify'];
  $end = $row['companyEndContract'];
  $name = $row['companyMainName'];
}
$current = date('Y-m-d');

$notify = date('Y-m-d', strtotime($end. "- {$days} days"));

if($current == $notify){

  echo '<script type="text/javascript">alert("'.$name.'s contract will end soon");</script>';

}


?>
