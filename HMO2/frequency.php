<?php
  require 'parts/php/connection.php';
  $freq = mysqli_query($con, "SELECT * FROM tblfrequency");
  if(mysqli_num_rows($freq)){
    $data = array();
      while ($row = mysqli_fetch_array($freq)) {
        $data[] = array(
          'id' => $row['frequencyID'],
          'name' => $row['frequencyName']
        );
      }
      header('Content-type: application/json');
      echo json_encode($data);
  }
?>
