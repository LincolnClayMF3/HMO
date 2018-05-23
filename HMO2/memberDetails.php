<?php
  require 'parts/php/connection.php';
  $sql = mysqli_query($con, "SELECT memberTransID, memberCardID, memberTransMobile FROM tblmembertransaction
         WHERE memberTransID = '".$_GET["member"]."';");
  if(mysqli_num_rows($sql)){
    $data = array();
      while ($row = mysqli_fetch_array($sql)) {
        $data[] = array(
          'member' => $row['memberTransID'],
          'contact' => $row['memberTransMobile'],
          'card' => $row['memberCardID']
        );
      }
      header('Content-type: application/json');
      echo json_encode($data);
  }
?>
