<?php
  require 'parts/php/connection.php';

$sql = mysqli_query($con, "SELECT p1.planLimitID, p1.planAmountLimit, p3.planID, p3.planAnnualPayment FROM tblplanlimit p1
        INNER JOIN tblplanamountlimit p2 ON p1.planLimitID = p2.intPlanLimitID
        INNER JOIN tblplan p3 ON p2.intPlanID = p3.planID
        WHERE p3.planID = '".$_GET["amount"]."';");

        if(mysqli_num_rows($sql)){
          $data = array();
            while ($row = mysqli_fetch_array($sql)) {
              $data[] = array(
                'id' => $row['planLimitID'],
                'amount' => $row['planID'],
                'name' => $row['planAmountLimit'],
                'amount' => $row['planAnnualPayment']
              );
            }
            header('Content-type: application/json');
            echo json_encode($data);
        }
?>
