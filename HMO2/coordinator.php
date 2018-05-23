<?php
  require 'parts/php/connection.php';
  $sql = mysqli_query($con, "SELECT *, CONCAT(userFirstName,' ',userLastName) AS name FROM tbluser
         WHERE userType = 'Coordinator'");
  if(mysqli_num_rows($sql)){
    $data = array();
      while ($row = mysqli_fetch_array($sql)) {
        $data[] = array(
          'id' => $row['userID'],
          'name' => $row['name']
        );
      }
      header('Content-type: application/json');
      echo json_encode($data);
  }
?>
