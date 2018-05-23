
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Member Name</th>
        <th>Membership Type</th>
        <th>Preferred Plan</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($type == "None" && $plan == "None"){

        $fetchMember = mysqli_query($con, "SELECT m1.memberTransName, m1.status, m1.memberTransID,
                         p1.planName, p1.planID, m2.membershipName, m2.membershipID FROM tblmembertransaction m1
                         INNER JOIN tblmemberplan p2 ON p2.intMemberID = m1.memberTransID
                         INNER JOIN tblplan p1 ON p1.planID = p2.intPlanID
                         INNER JOIN tblmembertype m3 ON m3.intMemberID = m1.memberTransID
                         INNER JOIN tblmembershiptype m2 ON m2.membershipID = m3.intMembershipID
                         WHERE m1.status = 'Active' ORDER BY m1.memberTransName ASC");

        while ($row = mysqli_fetch_array($fetchMember)) {

          $memberType = $row['membershipName'];
          $memberName = $row['memberTransName'];
          $memberPlan = $row['planName'];
          $memberStatus = $row['status'];

          echo '<tr>';
          echo '<td>'.$memberName.'</td>';
          echo '<td>'.$memberType.'</td>';
          echo '<td>'.$memberPlan.'</td>';
          echo '<td>'.$memberStatus.'</td>';
          echo '</tr>';
        }
      }

      if(isset($_POST['btnSearch'])){

        $type = $_POST['type'];
        $plan = $_POST['plan'];

        if($plan == "None"){
          $fetchMember = mysqli_query($con, "SELECT m1.memberTransName, m1.status, m1.memberTransID,
                           p1.planName, p1.planID, m2.membershipName, m2.membershipID FROM tblmembertransaction m1
                           INNER JOIN tblmemberplan p2 ON p2.intMemberID = m1.memberTransID
                           INNER JOIN tblplan p1 ON p1.planID = p2.intPlanID
                           INNER JOIN tblmembertype m3 ON m3.intMemberID = m1.memberTransID
                           INNER JOIN tblmembershiptype m2 ON m2.membershipID = m3.intMembershipID
                           WHERE m2.membershipName = '$type' AND m1.status = 'Active' ORDER BY m1.memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberType = $row['membershipName'];
            $memberName = $row['memberTransName'];
            $memberPlan = $row['planName'];
            $memberStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$memberType.'</td>';
            echo '<td>'.$memberPlan.'</td>';
            echo '<td>'.$memberStatus.'</td>';
            echo '</tr>';
          }
        }

        if($type == "None"){
          $fetchMember = mysqli_query($con, "SELECT m1.memberTransName, m1.status, m1.memberTransID,
                           p1.planName, p1.planID, m2.membershipName, m2.membershipID FROM tblmembertransaction m1
                           INNER JOIN tblmemberplan p2 ON p2.intMemberID = m1.memberTransID
                           INNER JOIN tblplan p1 ON p1.planID = p2.intPlanID
                           INNER JOIN tblmembertype m3 ON m3.intMemberID = m1.memberTransID
                           INNER JOIN tblmembershiptype m2 ON m2.membershipID = m3.intMembershipID
                           WHERE p1.planName = '$plan' AND m1.status = 'Active' ORDER BY m1.memberTransName ASC");

          while ($row = mysqli_fetch_array($fetchMember)) {

            $memberType = $row['membershipName'];
            $memberName = $row['memberTransName'];
            $memberPlan = $row['planName'];
            $memberStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$memberName.'</td>';
            echo '<td>'.$memberType.'</td>';
            echo '<td>'.$memberPlan.'</td>';
            echo '<td>'.$memberStatus.'</td>';
            echo '</tr>';
          }
        }

        $fetchMember = mysqli_query($con, "SELECT m1.memberTransName, m1.status, m1.memberTransID,
                         p1.planName, p1.planID, m2.membershipName, m2.membershipID FROM tblmembertransaction m1
                         INNER JOIN tblmemberplan p2 ON p2.intMemberID = m1.memberTransID
                         INNER JOIN tblplan p1 ON p1.planID = p2.intPlanID
                         INNER JOIN tblmembertype m3 ON m3.intMemberID = m1.memberTransID
                         INNER JOIN tblmembershiptype m2 ON m2.membershipID = m3.intMembershipID
                         WHERE m2.membershipName = '$type' AND p1.planName = '$plan' AND m1.status = 'Active' ORDER BY m1.memberTransName ASC");

        while ($row = mysqli_fetch_array($fetchMember)) {

          $memberType = $row['membershipName'];
          $memberName = $row['memberTransName'];
          $memberPlan = $row['planName'];
          $memberStatus = $row['status'];

          echo '<tr>';
          echo '<td>'.$memberName.'</td>';
          echo '<td>'.$memberType.'</td>';
          echo '<td>'.$memberPlan.'</td>';
          echo '<td>'.$memberStatus.'</td>';
          echo '</tr>';
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
    "ordering": false
  }
);

</script>
