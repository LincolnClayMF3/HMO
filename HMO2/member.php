<?php
  require 'parts/php/connection.php';
  $sql = mysqli_query($con, "SELECT * FROM tblmembertransaction WHERE status = 'Active'");
  if(mysqli_num_rows($sql)){
    $data = array();
      while ($row = mysqli_fetch_array($sql)) {
        $data[] = array(
          'id' => $row['memberTransID'],
          'name' => $row['memberTransName']
        );
      }
      header('Content-type: application/json');
      echo json_encode($data);
  }
?>
