<?php

require 'parts/php/connection.php';

$sql2 = mysqli_query($con, "SELECT p1.planID, p1.planName, c4.companyMainID FROM tblplan p1
        INNER JOIN tblcompanyplan c3 ON p1.planID = c3.intPlanID
        INNER JOIN tblcompanymaintenance c4 ON c3.intCompanyID = c4.companyMainID
        WHERE c4.companyMainID = '".$_GET["plan"]."';");

        if(mysqli_num_rows($sql2)){
          $data2 = array();
            while ($row2 = mysqli_fetch_array($sql2)) {
              $data2[] = array(
                'id2' => $row2['planID'],
                'plan' => $row2['companyMainID'],
                'name2' => $row2['planName']
              );
            }
            header('Content-type: application/json');
            echo json_encode($data2);
        }

?>
