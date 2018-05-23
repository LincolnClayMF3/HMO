<?php

$notification = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance WHERE status = 'Active'");
while ($row = mysqli_fetch_array($notification)) {
  $days = $row['hospitalNotify'];
  $end = $row['hospitalEndContract'];
}
$current = date('Y-m-d');

$notify = date('Y-m-d', strtotime($end. "- {$days} days"));

if($current == $notify){
  ?>

  <script>
    alert("Expire");
  </script>

  <?php
}

?>
