<?php
  require 'parts/php/connection.php';

// $sql = mysqli_query($con, "SELECT c1.companyMainName, c1.companyMainID, m1.membershipID, m2.memberTransID FROM tblcompanymaintenance c1
//         INNER JOIN tblcompanytype c2 ON c1.companyMainID = c2.intCompanyID
//         INNER JOIN tblmembershiptype m1 ON c2.intTypeID = m1.membershipID
//         WHERE m1.membershipID = '".$_GET["comp"]."';");

$sql = mysqli_query($con, "SELECT m1.memberTransID, m1.memberTransAmountToPay, f1.frequencyID, f1.frequencyName, c1.companyMainName, c1.companyMainID,
                                  m3.membershipID, m3.membershipName, p1.planName, p1.planID, p3.planLimitID, p3.planAmountLimit FROM tblmembertransaction m1
       INNER JOIN tblmembertype m2 ON m2.intMemberID = m1.memberTransID
       INNER JOIN tblmembershiptype m3 ON m3.membershipID = m2.intMembershipID
       INNER JOIN tblmembercompany m4 ON m4.intMemberID = m1.memberTransID
       INNER JOIN tblcompanymaintenance c1 ON c1.companyMainID = m4.intCompanyID
       INNER JOIN tblmemberplan m5 ON m5.intMemberID = m1.memberTransID
       INNER JOIN tblplan p1 ON p1.planID = m5.intPlanID
       INNER JOIN tblplanamountlimit p2 ON p2.intPlanID = p1.planID
       INNER JOIN tblplanlimit p3 ON p3.planLimitID = p2.intPlanLimitID
       INNER JOIN tblmemberpayment m6 ON m6.intMemberID = m1.memberTransID
       INNER JOIN tblfrequency f1 ON f1.frequencyID = m6.intPaymentFreqID WHERE m1.memberTransID = '".$_GET['details']."';");

        if(mysqli_num_rows($sql)){
          $data = array();
            while ($row = mysqli_fetch_array($sql)) {
              $data[] = array(
                'details' => $row['memberTransID'],
                'id' => $row['membershipID'],
                'name' => $row['membershipName'],
                'id2' => $row['companyMainID'],
                'name2' => $row['companyMainName'],
                'id3' => $row['planID'],
                'name3' => $row['planName'],
                'id4' => $row['planLimitID'],
                'name4' => $row['planAmountLimit'],
                'id5' => $row['frequencyID'],
                'name5' => $row['frequencyName'],
                'name6' => $row['memberTransAmountToPay']
              );
            }
            header('Content-type: application/json');
            echo json_encode($data);
        }
?>
