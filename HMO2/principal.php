<?php
  require 'parts/php/connection.php';

  $sql = mysqli_query($con, "SELECT m1.memberTransName, m1.status, m1.memberTransID, s1.specificationID, s1.specificationName FROM tblmembertransaction m1
               INNER JOIN tblmemberspecs m2 ON m1.memberTransID = m2.intMemberID
               INNER JOIN tblspecsmember s1 ON s1.specificationID = m2.intSpecsID WHERE s1.specificationName = 'Principal'");

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
