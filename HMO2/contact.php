<?php
  require 'parts/php/connection.php';
  $sql = mysqli_query($con, "SELECT userID, userTelephone, userMobile, userEmail FROM tbluser
         WHERE userType = 'Coordinator' AND userID = '".$_GET["contact"]."';");
  if(mysqli_num_rows($sql)){
    $data = array();
      while ($row = mysqli_fetch_array($sql)) {
        $data[] = array(
          'contact' => $row['userID'],
          'telephone' => $row['userTelephone'],
          'mobile' => $row['userMobile'],
          'email' => $row['userEmail']
        );
      }
      header('Content-type: application/json');
      echo json_encode($data);
  }
?>
