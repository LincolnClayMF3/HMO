
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Plan Name</th>
        <th>Membership Type</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($type == "None"){

        $allPlan = mysqli_query($con, "SELECT * FROM tblplan");


        while ($row = mysqli_fetch_array($allPlan)) {
          $planID = $row['planID'];
          $planName = $row['planName'];
          $planStatus = $row['status'];

          $planType = array();
          $allMembershipType = mysqli_query($con, "SELECT m1.membershipName FROM tblmembershiptype m1
                     INNER JOIN tblplantype m2 ON m2.intTypeID = m1.membershipID WHERE m2.intPlanID = $planID");

          while ($row=mysqli_fetch_array($allMembershipType)) {
            $planType[] = $row['membershipName'];
          }

          echo '<tr>';
          echo '<td>'.$planName.'</td>';
          echo '<td>';
          foreach ($planType as $key) {
            echo "$key </br>";
          }
          echo '</td>';
          echo '<td>'.$planStatus.'</td>';
          echo '</tr>';
        }
  }

    if(isset($_POST['btnSearch'])){

      $type = $_POST['type'];


    if($type == "None"){


      $allPlan = mysqli_query($con, "SELECT * FROM tblplan WHERE status = 'Active'");

      while ($row = mysqli_fetch_array($allPlan)) {
        $planID = $row['planID'];
        $planName = $row['planName'];
        $planStatus = $row['status'];

        $planType = array();
        $allMembershipType = mysqli_query($con, "SELECT m1.membershipName FROM tblmembershiptype m1
                   INNER JOIN tblplantype m2 ON m2.intTypeID = m1.membershipID WHERE m2.intPlanID = $planID");

        while ($row=mysqli_fetch_array($allMembershipType)) {
          $planType[] = $row['membershipName'];
        }

        echo '<tr>';
        echo '<td>'.$planName.'</td>';
        echo '<td>';
        foreach ($planType as $key) {
          echo "$key </br>";
        }
        echo '</td>';
        echo '<td>'.$planStatus.'</td>';
        echo '</tr>';
      }
    }



    else{
      $allPlan = mysqli_query($con, "SELECT p1.planID, p1.planName, p1.status,
              m1.membershipName, m1.membershipID FROM tblplan p1
              INNER JOIN tblplantype p2 ON p2.intPlanID = p1.planID
              INNER JOIN tblmembershiptype m1 ON m1.membershipID = p2.intTypeID
              WHERE m1.membershipName = '$type'");

      while ($row = mysqli_fetch_array($allPlan)) {
        $planName = $row['planName'];
        $planType = $row['membershipName'];
        $planStatus = $row['status'];

        echo '<tr>';
        echo '<td>'.$planName.'</td>';
        echo '<td>'.$planType.'</td>';
        echo '<td>'.$planStatus.'</td>';
        echo '</tr>';
      }
    }

}

?>
</tbody>
</table>
</div>
</div>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example1").DataTable(
  {
    "ordering": true
  }
);

</script>
