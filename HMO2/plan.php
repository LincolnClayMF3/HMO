<?php
  require 'parts/php/connection.php';
  $plan = mysqli_query($con, "SELECT * FROM tblplan WHERE status = 'Active'");
  if(mysqli_num_rows($plan)){
    $data = array();
      while ($row = mysqli_fetch_array($plan)) {
        $data[] = array(
          'id' => $row['planID'],
          'name' => $row['planName']
        );
      }
      header('Content-type: application/json');
      echo json_encode($data);
  }
?>
