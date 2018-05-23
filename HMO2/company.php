<?php
  require 'parts/php/connection.php';

$sql = mysqli_query($con, "SELECT c1.companyMainName, c1.companyType, c1.companyMainID, m1.membershipName, m1.membershipID FROM tblcompanymaintenance c1
        INNER JOIN tblmembershiptype m1 ON c1.companyType = m1.membershipName
        WHERE m1.membershipID = '".$_GET["comp"]."';");

        if(mysqli_num_rows($sql)){
          $data = array();
            while ($row = mysqli_fetch_array($sql)) {
              $data[] = array(
                'id' => $row['companyMainID'],
                'comp' => $row['membershipID'],
                'name' => $row['companyMainName']
              );
            }
            header('Content-type: application/json');
            echo json_encode($data);
        }

?>
